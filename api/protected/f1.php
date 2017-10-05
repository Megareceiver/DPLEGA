<?php
	Class F1 {
		public function __construct(){
			if (session_status() == PHP_SESSION_NONE) {session_start();} // session start
			require_once('protected/config.php');
			$this->db = openGate();
		}

		public function requestData($data, $target){
			/* initial condition */
			$resultList = array();
			$table 		= "";
			$field 		= array();
			$rows		= 0;
			$condition 	= "";
			$orderBy	= "";
			$error		= 0;
			$errorType  = "";
			$errorMsg	= "";
		
			/* refferences */
			
			switch($target){
				case "ft111" : $resultList = $this->getInfoLembaga($data); break;
				
				default	   : $resultList = array( "feedStatus" => "failed", "feedType" => "danger", "feedMessage" => "Terjadi kesalahan fatal, proses dibatalkan!", "feedData" => array()); break;
			}
			
			/* result fetch */
			$json = $resultList;
			
			return $json;
		}

		public function getInfoLembaga($data){
			/* initial condition */
			$resultList = array();
			$table 		= "";
			$field 		= array();
			$rows		= 0;
			$condition 	= "";
			$orderBy	= "";
			$error		= 0;
			$errorType  = "";
			$errorMsg	= "";
		
			/* open connection */ 
			$gate = $this->db;
			if($gate){		
				// connection = true
				$sql  = "
				SELECT 
					l.nama, 
					l.noTelp, 
					l.email,
					CONCAT_WS(' ', l.`alamat`, 'RT.',l.`noRt`, '/', 'RW.', l.`noRw`, `namaKelurahan`, `namaKecamatan`, `namaWilayah`, `namaProvinsi`) as alamat
				FROM 
					dplega_000_lembaga l
				LEFT JOIN
					dplega_100_provinsi p ON l.kodeProvinsi = p.idData
				LEFT JOIN
					dplega_101_wilayah w ON l.kodeWilayah = w.idData
				LEFT JOIN
					dplega_102_kecamatan kc ON l.kodeKecamatan = kc.idData
				LEFT JOIN
					dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData
				WHERE 
				noRegistrasi IN (".$data->noRegistrasi.")";
				//$sql  = "";
				
		       	$dumb = $this->db->query($sql);
		        if($dumb){
					$dataRes = $dumb->fetchAll();
					// output data of each row
					
					$resultList = array( "feedStatus" => "succes", "feedMessage" => "Data ditemukan!", "feedData" => $dataRes);
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
			//$resultList = array( "feedStatus" => "succes", "feedMessage" => "Data tidak ditemukan!", "feedData" => array());
			/* result fetch */
			$json = $resultList;
			
			return $json;
		}
		
	}
?>