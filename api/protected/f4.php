<?php

	Class F4 {
		public function __construct(){
			if (session_status() == PHP_SESSION_NONE) {session_start();} // session start
			require_once('protected/config.php');
			$this->db = openGate();
		}

		public function requestData($target){
			switch($target){
				case "f40" : $resultList = $this->getTimWilayah(); break;
				case "f401": $resultList = $this->getAllLingkupArea(); break;
				case "f431": $resultList = $this->getBentukLembaga(); break;
				default	   : $resultList = array( "feedStatus" => "failed", "feedType" => "danger", "feedMessage" => "Terjadi kesalahan fatal, proses dibatalkan!", "feedData" => array()); break;
			}

			/* result fetch */
			$json = $resultList;
		
	        return $json;
		}
		
		public function getAllLingkupArea(){
	     	 /* initial condition */
	     	$resultList			= array();
			$error				= 0;
			$errorType  		= "";
			$errorMsg			= "";
			$dumb 				= "";
		
			/* open connection */ 
			$gate = $this->db;
			if($gate){		
				// connection = true
				$sql  = "SELECT 
							kl.idData as idKelurahan, 
							kl.kodeKelurahan, 
							namaKelurahan, 
							kc.idData as idKecamatan,
							kc.kodeKecamatan,
							namaKecamatan, 
							wl.idData as idWilayah,
							wl.kodeWilayah,
							namaWilayah, 
							pr.idData as idProvinsi,
							pr.kodeProvinsi,
							namaProvinsi
						FROM
							dplega_100_provinsi pr
						JOIN
							dplega_101_wilayah wl
							ON pr.idData = wl.idProvinsi
						JOIN
							dplega_102_kecamatan kc
							ON wl.idData = kc.idWilayah
						JOIN
							dplega_103_kelurahan kl
							ON kc.idData = kl.idKecamatan
						ORDER BY namaKelurahan ASC";

				
		        $dumb = $this->db->query($sql);
		        if($dumb){
				$data = $dumb->fetchAll();
					// output data of each row
					$fetchTemp		= "";
					$fetch 	  		= array();
					$fetchDetail	= array();
					$record    		= array();
					$recordDetail   = array();
					foreach($data as $row) {
						
						unset($fetch); $fetch = array();
						
						$fetch 		   = $row['namaKelurahan'].", ".$row['namaKecamatan']." ".$row['namaWilayah']." | ".$row['namaProvinsi'];
						$fetchDetail = array(
									"idKelurahan" 	=> $row['idKelurahan'],
									"kodeKelurahan" => $row['kodeKelurahan'],
									"namaKelurahan" => $row['namaKelurahan'],
									"idKecamatan" 	=> $row['idKecamatan'],
									"kodeKecamatan" => $row['kodeKecamatan'],
									"namaKecamatan" => $row['namaKecamatan'],
									"idWilayah" 	=> $row['idWilayah'],
									"kodeWilayah" 	=> $row['kodeWilayah'],
									"namaWilayah" 	=> $row['namaWilayah'],
									"idProvinsi" 	=> $row['idProvinsi'],
									"kodeProvinsi" 	=> $row['kodeProvinsi'],
									"namaProvinsi" 	=> $row['namaProvinsi']
								);
						
						array_push($record, $fetch); 
						array_push($recordDetail, $fetchDetail); 

					}
					
					$resultList = array( "feedStatus" => "succes", "feedMessage" => "Data ditemukan!", "feedData" => array($record), "feedDataDetail" =>  array("list" => $recordDetail));
				}else {
					$resultList = array( "feedStatus" => "succes", "feedMessage" => "Data tidak ditemukan!", "feedData" => array());
				}
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

		public function getTimWilayah(){
	     	 /* initial condition */
			$error				= 0;
			$errorType  		= "";
			$errorMsg			= "";
			$dumb 				= ""; 
			$data 				= ""; 
		
			/* open connection */ 
			$gate = $this->db;
			if($gate){		
				// connection = true
				$sql = 	"	SELECT 
							kl.idData as idKelurahan, 
							kl.kodeKelurahan, 
							namaKelurahan, 
							kc.idData as idKecamatan,
							kc.kodeKecamatan,
							namaKecamatan, 
							wl.idData as idWilayah,
							wl.kodeWilayah,
							namaWilayah, 
							pr.idData as idProvinsi,
							pr.kodeProvinsi,
							namaProvinsi
						FROM
							dplega_100_provinsi pr
						JOIN
							dplega_101_wilayah wl
							ON pr.idData = wl.idProvinsi
						JOIN
							dplega_102_kecamatan kc
							ON wl.idData = kc.idWilayah
						JOIN
							dplega_103_kelurahan kl
							ON kc.idData = kl.idKecamatan
						ORDER BY namaKelurahan ASC
					";
		        $dumb = $this->db->query($sql); 
		        
		        if($dumb){
					$data = $dumb->fetchAll();
					// output data of each row
					$fetchProvinsi	= array();
					$fetchWilayah	= array();
					$fetchKecamatan	= array();
					$fetchKelurahan	= array();
					$fetchDProvinsi	= array();
					$fetchDWilayah	= array();
					$fetchDKecamatan= array();
					$fetchDKelurahan= array();

					$record    		= array();
					$recordDetail   = array();
					foreach($data as $row) {
						array_push($fetchKelurahan  , $row['namaKelurahan'].", ".$row['namaKecamatan']." ".$row['namaWilayah']." | ".$row['namaProvinsi']);
						array_push($fetchKecamatan  , $row['namaKecamatan']." ".$row['namaWilayah']." | ".$row['namaProvinsi']);
						array_push($fetchWilayah    , $row['namaWilayah']." | ".$row['namaProvinsi']);
						array_push($fetchProvinsi   , $row['namaProvinsi']);

						array_push($fetchDKelurahan, array( 
							"group" => "kelurahan",
							"idData"=> $row['idKelurahan'],
							"kode" 	=> $row['kodeKelurahan'],
							"nama" 	=> $row['namaKelurahan']
						));

						array_push($fetchDKecamatan, array(
							"group" => "kecamatan",
							"idData"=> $row['idKecamatan'],
							"kode" 	=> $row['kodeKecamatan'],
							"nama" 	=> $row['namaKecamatan']
						));

						array_push($fetchDWilayah, array(
							"group" => "wilayah",
							"idData"=> $row['idWilayah'],
							"kode" 	=> $row['kodeWilayah'],
							"nama" 	=> $row['namaWilayah']
						));

						array_push($fetchDProvinsi, array(
							"group" => "provinsi",
							"idData"=> $row['idProvinsi'],
							"kode" 	=> $row['kodeProvinsi'],
							"nama" 	=> $row['namaProvinsi']
						));
					}

					$record = array(
						"kelurahan" => $fetchKelurahan,
						"kecamatan" => $fetchKecamatan,
						"wilayah"	=> $fetchWilayah,
						"provinsi"	=> $fetchProvinsi
					);

					$recordDetail = array(
						"kelurahan" => $fetchDKelurahan,
						"kecamatan" => $fetchDKecamatan,
						"wilayah"	=> $fetchDWilayah,
						"provinsi"	=> $fetchDProvinsi
					);
					
					$resultList = array( "feedStatus" => "succes", "feedMessage" => "Data ditemukan!", "feedData" => $record, "feedDataDetail" => $recordDetail);
				}else {
					$resultList = array( "feedStatus" => "succes", "feedMessage" => "Data tidak ditemukan!", "feedData" => array());
				}
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

		public function getBentukLembaga(){
	     	 /* initial condition */
			$error				= 0;
			$errorType  		= "";
			$errorMsg			= "";
			$dumb 				= ""; 
			$data 				= ""; 
		
			/* open connection */ 
			$gate = $this->db;
			if($gate){		
				// connection = true
				$sql  = "SELECT 
					kodeBentukLembaga,
					namaBentukLembaga
				 FROM
					dplega_200_bentuklembaga
				 ORDER BY kodeBentukLembaga ASC";

		        $dumb = $this->db->query($sql); 
		        $data = $dumb->fetchAll(PDO::FETCH_OBJ);

		        $resultList = array( "feedStatus" => "succes", "feedMessage" => "Data ditemukan!", "feedData" => $data);
				$gate = null;
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
	}

?>