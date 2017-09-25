<?php

	Class F4 {
		public function __construct(){
			if (session_status() == PHP_SESSION_NONE) {session_start();} // session start
			require_once('protected/config.php');
			$this->db = openGate();
		}

		public function getAllLingkupArea(){
	     	 /* initial condition */
			$error				= 0;
			$errorType  		= "";
			$errorMsg			= "";
			$dumb 				= ""; 
			$data['provinsi'] 	= ""; 
			$data['wilayah']  	= ""; 
			$data['kecamatan']	= ""; 
			$data['kelurahan']	= ""; 
		
			/* open connection */ 
			$gate = $this->db;
			if($gate){		
				// connection = true
				$sql  = "SELECT * from (select 'provinsi' as `group`, 'f411' as `target`, a.idData, kodeProvinsi as code, namaProvinsi as name, '' as `referencesKey`, '' as `references` FROM `dplega_100_provinsi` a LEFT JOIN  `dplega_101_wilayah` b ON a.idData = b.idProvinsi LEFT JOIN  `dplega_102_kecamatan` c ON b.idData = c.idWilayah ".$dumbQuery['provinsi']." order by a.idData) as table_1";
		        $dumb = $this->db->query($sql); 
		        $data['provinsi'] = $stmt->fetchAll(PDO::FETCH_OBJ);

		        $sql = 	"SELECT * from (SELECT 'wilayah' as `group`, 'f412' as `target`, a.idData, a.kodeWilayah as code, a.namaWilayah as name, a.idProvinsi as `referencesKey`, namaProvinsi as `references` FROM `dplega_101_wilayah` a LEFT JOIN  `dplega_100_provinsi` b ON a.idProvinsi = b.idData LEFT JOIN  `dplega_102_kecamatan` c ON c.idWilayah = a.idData ".$dumbQuery['wilayah']." order by a.idData) as table_2";
		        $dumb = $this->db->query($sql); 
		        $data['wilayah'] = $stmt->fetchAll(PDO::FETCH_OBJ);

		        $sql = 	"SELECT * from (SELECT 'kecamatan' as `group`, 'f413' as `target`, a.idData, a.kodeKecamatan as code, a.namaKecamatan as name, a.idWilayah as `referencesKey`, namaWilayah as `references` FROM `dplega_102_kecamatan` a LEFT JOIN  `dplega_101_wilayah` b ON a.idWilayah = b.idData LEFT JOIN  `dplega_100_provinsi` c ON b.idProvinsi = c.idData ".$dumbQuery['kecamatan']." order by a.idData) as table_3";
		        $dumb = $this->db->query($sql); 
		        $data['kecamatan'] = $stmt->fetchAll(PDO::FETCH_OBJ);

		        $sql = 	"SELECT * from (SELECT 'kelurahan' as `group`, 'f414' as `target`, a.idData, a.kodeKelurahan as code, a.namaKelurahan as name, a.idKecamatan as `referencesKey`, namaKecamatan as `references` FROM `dplega_103_kelurahan` a LEFT JOIN  `dplega_102_kecamatan` b ON a.idKecamatan = b.idData  LEFT JOIN `dplega_101_wilayah` c ON b.idWilayah = c.idData  LEFT JOIN  `dplega_100_provinsi` d ON c.idProvinsi = d.idData ".$dumbQuery['kelurahan']." order by a.idData) as table_4";
		        $dumb = $this->db->query($sql); 
		        $data['kelurahan'] = $stmt->fetchAll(PDO::FETCH_OBJ); 

		        $resultList = array( "feedStatus" => "succes", "feedMessage" => "Data ditemukan!", "feedData" => array($data));
				closeGate($gate);
			}else {
				//error state
				$error		= 1;
				$errorType  = "danger";
				$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
			
			
			if($error == 1){
				//error state
				$resultList = array( "feedStatus" => "failed", "feedType" => $errorType, "feedMessage" => $errorMsg);
			}
			
			/* result fetch */
			$json = $resultList;
		
	        return $json;
		}

		// public function getBarang($idBarang){
	 //        $sql = "SELECT * FROM barang WHERE idBarang=?";
	 //        $stmt = $this->db->prepare($sql); 
	 //        $stmt->execute(array($idBarang));
	 //        $data = $stmt->fetch(PDO::FETCH_OBJ);
	 //        return $data;
		// }

		// public function insertBarang($namaBarang, $kategori, $stok, $hargaBeli, $hargaJual){
	 //        $sql = "INSERT INTO barang (namaBarang, kategori, stok, hargaBeli, hargaJual) VALUES (?,?,?,?,?)";
	 //        $stmt = $this->db->prepare($sql); 
	 //        $status = $stmt->execute(array($namaBarang, $kategori, $stok, $hargaBeli, $hargaJual));
	 //        return $status;
		// }

		// public function updateBarang($idBarang, $namaBarang, $kategori, $stok, $hargaBeli, $hargaJual){
	 //        $sql = "UPDATE barang SET namaBarang=?, kategori=?, stok=?, hargaBeli=?, hargaJual=? WHERE idBarang=?";
	 //        $stmt = $this->db->prepare($sql); 
	 //        $status = $stmt->execute(array($namaBarang, $kategori, $stok, $hargaBeli, $hargaJual, $idBarang));
	 //        return $status;
		// }

		// public function deleteBarang($idBarang){
	 //        $sql = "DELETE FROM barang WHERE idBarang=?";
	 //        $stmt = $this->db->prepare($sql); 
	 //        $status = $stmt->execute(array($idBarang));
	 //        return $status;
		// }
	}

?>