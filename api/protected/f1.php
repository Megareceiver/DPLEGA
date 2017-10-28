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
				case "ft111" : $resultList = $this->getAllLembaga($data); break;
				case "fetchLembaga"  : 
					$resultList = $this->fetchSingleRequest(
						"dplega_000_lembaga l
							LEFT JOIN
							dplega_200_bentuklembaga b ON l.kodeBentukLembaga = b.kodeBentukLembaga
							LEFT JOIN
							dplega_100_provinsi p ON l.kodeProvinsi = p.idData
							LEFT JOIN
							dplega_101_wilayah w ON l.kodeWilayah = w.idData
							LEFT JOIN
							dplega_102_kecamatan kc ON l.kodeKecamatan = kc.idData
							LEFT JOIN
							dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData", 
						"l.nama, 
						b.namaBentukLembaga,
						l.noRegistrasi, 
						l.noTelp, 
						l.email,
						l.mediaSosial,
						CONCAT_WS(' ', l.`alamat`, 'RT.',l.`noRt`, '/', 'RW.', l.`noRw`, `namaKelurahan`, `namaKecamatan`, `namaWilayah`, `namaProvinsi`) as alamat,
						l.langitude,
						l.latitude,
						l.catatanLain", $data->keyword, "ORDER BY l.name ASC"); 
					// $resultList =$data->keyword;
				break;
				
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

		public function getAllLembaga($data){
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
					l.noRegistrasi, 
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
					dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData";
				
		       	$dumb = $this->db->query($sql);
		        if($dumb){
					$dataRes = $dumb->fetchAll(PDO::FETCH_ASSOC);
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

		public function fetchAllRecord($table, $fields, $conditions = "", $orderBy = ""){
			/* initial condition */
			$resultList = array();
			$feedStatus	= "failed";
			$feedType   = "danger";
			$feedMessage= "Something went wrong, failed to collect data!";
			$feedData	= array();

			$temp		= "";

			/* open connection */ 
			$gate = $this->db;
			if($gate){		

				if(is_array($fields)) {
					foreach ($fields as $value) {
						if($temp  == "") $temp = $value;
						else $temp = $temp.",".$value;
					}

					$fields = $temp;
					$temp   = "";
				}

				if(is_array($conditions)) {
					foreach ($conditions as $value) {
						$temp = $temp." ".$value;
					}

					$conditions = $temp;
					$temp   = "";
				}

				$conditions = ($conditions != "") ? "WHERE ".$conditions : "";


				$sql = "SELECT ".$fields." FROM ".$table." ".$conditions." ".$orderBy." ";
							
				$result = $this->db->query($sql);
				if($result){
					$feedStatus	= "success";
					$feedType   = "success";
					$feedMessage= "The process has been successful";
					$feedData = $result->fetchAll(PDO::FETCH_ASSOC);
				}	

				$feedType = $sql;
			}
			
			$resultList = array( "feedStatus" => $feedStatus, "feedType" => $feedType, "feedMessage" => $feedMessage, "feedData" => $feedData);
			
			/* result fetch */
			$json = $resultList;
			
			return $json;
		}

		public function fetchAllRequest($table, $fields, $conditions = "", $orderBy = "", $paging = "1"){
			/* initial condition */
			$resultList = array();
			$feedStatus	= "failed";
			$feedType   = "danger";
			$feedMessage= "Something went wrong, failed to collect data!";
			$feedData	= array();

			$temp		= "";

			/* open connection */ 
			$gate = $this->db;
			if($gate){		

				if(is_array($fields)) {
					foreach ($fields as $value) {
						if($temp  == "") $temp = $value;
						else $temp = $temp.",".$value;
					}

					$fields = $temp;
					$temp   = "";
				}

				if(is_array($conditions)) {
					foreach ($conditions as $value) {
						$temp = $temp." ".$value;
					}

					$conditions = $temp;
					$temp   = "";
				}

				$conditions = ($conditions != "") ? "WHERE ".$conditions : "";


				$temp = intval($paging);
				$temp = ($temp - 1) * 20;

				$paging = "LIMIT ".$temp.",20";

				$sql = "SELECT ".$fields." FROM ".$table." ".$conditions." ".$orderBy." ".$paging;
							
				$result = $this->db->query($sql);
				if($result){
					$feedStatus	= "success";
					$feedType   = "success";
					$feedMessage= "The process has been successful";
					$feedData = $result->fetchAll(PDO::FETCH_ASSOC);
				}	

				$feedType = $sql;
			}
			
			$resultList = array( "feedStatus" => $feedStatus, "feedType" => $feedType, "feedMessage" => $feedMessage, "feedData" => $feedData);
			
			/* result fetch */
			$json = $resultList;
			
			return $json;
		}

		public function fetchSingleRequest($table, $fields, $conditions = ""){
			/* initial condition */
			$resultList = array();
			$feedStatus	= "failed";
			$feedType   = "danger";
			$feedMessage= "Something went wrong, failed to collect data!";
			$feedData	= array();

			$temp		= "";

			/* open connection */ 
			$gate = $this->db;
			if($gate){		

				if(is_array($fields)) {
					foreach ($fields as $value) {
						if($temp  == "") $temp = $value;
						else $temp = $temp.",".$value;
					}

					$fields = $temp;
					$temp   = "";
				}

				if(is_array($conditions)) {
					foreach ($conditions as $value) {
						$temp = $temp." ".$value;
					}

					$conditions = $temp;
					$temp   = "";
				}

				$conditions = ($conditions != "") ? "WHERE ".$conditions : "";

				$sql = "SELECT ".$fields." FROM ".$table." ".$conditions;
							
				$result = $this->db->query($sql);
				if($result){
					$feedStatus	= "success";
					$feedType   = "success";
					$feedMessage= "The process has been successful";
					$feedData = $result->fetch(PDO::FETCH_ASSOC);
				}	

				// $feedType = $sql;
			}
			
			$resultList = array( "feedStatus" => $feedStatus, "feedType" => $feedType, "feedMessage" => $feedMessage, "feedData" => $feedData);
			
			/* result fetch */
			$json = $resultList;
			
			return $json;
		}
		
	}
?>