<?php

	Class F4 {
		public function __construct(){
			if (session_status() == PHP_SESSION_NONE) {session_start();} // session start
			require_once('protected/config.php');
			$this->db = openGate();
		}

		public function requestData($target){
			switch($target){
				case "f40" : $resultList = $this->getLingkupAreaSection(); break;
				case "f401": $resultList = $this->getAllLingkupArea(); break;
				case "f402": $resultList = $this->getTimWilayah(); break;
				case "f403": $resultList = $this->fetchAllRequest('dplega_101_wilayah', array("kodeWilayah", "namaWilayah"), "", "ORDER BY namaWilayah ASC"); break;
				case "f431": $resultList = $this->getBentukLembaga(); break;
				default	   : $resultList = array( "feedStatus" => "failed", "feedType" => "danger", "feedMessage" => "Terjadi kesalahan fatal, proses dibatalkan!", "feedData" => array()); break;
			}

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
			$feedMessage= "Terjadi kesalahan fatal, gagal meminta data!";
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
					$feedMessage= "Proses berhasil dilakukan";
					$feedData = $result->fetchAll(PDO::FETCH_ASSOC);
				}	

				// $feedType = $sql;
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

					$feedType = $sql;
			}
			
			$resultList = array( "feedStatus" => $feedStatus, "feedType" => $feedType, "feedMessage" => $feedMessage, "feedData" => $feedData);
			
			/* result fetch */
			$json = $resultList;
			
			return $json;
		}


		public function getLingkupAreaSection(){
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
			$dumbFieldS	= "";
			$dumbQueryS	= "";
			$dumbQuery['provinsi'] 	= ""; 
			$dumbQuery['wilayah'] 	= ""; 
			$dumbQuery['kecamatan'] = ""; 
			$dumbQuery['kelurahan'] = ""; 
		
			/* open connection */ 
			$gate = $this->db;
			if($gate){		
				// connection = true
				/* AUTHENTICATION */
				// if(
				// 	   isset($_SESSION['login']) && $_SESSION['login'] == "yes" 
				// 	&& isset($_SESSION['userLevel']) && $_SESSION['userLevel'] != "7"){
					
				// 	switch ($_SESSION['lingkupArea']) {
				// 		case '3': 
				// 			$dumbQuery['provinsi']  = "WHERE a.idData = '".$_SESSION['idBatasArea']."'"; 
				// 			$dumbQuery['wilayah']   = "WHERE b.idData = '".$_SESSION['idBatasArea']."'"; 
				// 			$dumbQuery['kecamatan'] = "WHERE c.idData = '".$_SESSION['idBatasArea']."'"; 
				// 			$dumbQuery['kelurahan'] = "WHERE d.idData = '".$_SESSION['idBatasArea']."'"; 
				// 		break;
				// 		case '2': 
				// 			$dumbQuery['provinsi']  = "WHERE b.idData = '".$_SESSION['idBatasArea']."'"; 
				// 			$dumbQuery['wilayah']   = "WHERE a.idData = '".$_SESSION['idBatasArea']."'"; 
				// 			$dumbQuery['kecamatan'] = "WHERE b.idData = '".$_SESSION['idBatasArea']."'"; 
				// 			$dumbQuery['kelurahan'] = "WHERE c.idData = '".$_SESSION['idBatasArea']."'"; 
				// 		break;
				// 		case '1': 
				// 			$dumbQuery['provinsi']  = "WHERE c.idData = '".$_SESSION['idBatasArea']."'"; 
				// 			$dumbQuery['wilayah']   = "WHERE c.idData = '".$_SESSION['idBatasArea']."'"; 
				// 			$dumbQuery['kecamatan'] = "WHERE a.idData = '".$_SESSION['idBatasArea']."'"; 
				// 			$dumbQuery['kelurahan'] = "WHERE b.idData = '".$_SESSION['idBatasArea']."'"; 
				// 		break;
				// 		default: break;
				// 	}
				// }
				/* AUTHENTICATION END */

				$sql = 	"SELECT * from (select 'provinsi' as `group`, 'f411' as `target`, a.idData, kodeProvinsi as code, namaProvinsi as name, '' as `referencesKey`, '' as `references` FROM `dplega_100_provinsi` a LEFT JOIN  `dplega_101_wilayah` b ON a.idData = b.idProvinsi LEFT JOIN  `dplega_102_kecamatan` c ON b.idData = c.idWilayah ".$dumbQuery['provinsi']." order by a.idData) as table_1
						 UNION
						 SELECT * from (SELECT 'wilayah' as `group`, 'f412' as `target`, a.idData, a.kodeWilayah as code, a.namaWilayah as name, a.idProvinsi as `referencesKey`, namaProvinsi as `references` FROM `dplega_101_wilayah` a LEFT JOIN  `dplega_100_provinsi` b ON a.idProvinsi = b.idData LEFT JOIN  `dplega_102_kecamatan` c ON c.idWilayah = a.idData ".$dumbQuery['wilayah']." order by a.idData) as table_2
						 UNION
						 SELECT * from (SELECT 'kecamatan' as `group`, 'f413' as `target`, a.idData, a.kodeKecamatan as code, a.namaKecamatan as name, a.idWilayah as `referencesKey`, namaWilayah as `references` FROM `dplega_102_kecamatan` a LEFT JOIN  `dplega_101_wilayah` b ON a.idWilayah = b.idData LEFT JOIN  `dplega_100_provinsi` c ON b.idProvinsi = c.idData ".$dumbQuery['kecamatan']." order by a.idData) as table_3
						 UNION
						 SELECT * from (SELECT 'kelurahan' as `group`, 'f414' as `target`, a.idData, a.kodeKelurahan as code, a.namaKelurahan as name, a.idKecamatan as `referencesKey`, namaKecamatan as `references` FROM `dplega_103_kelurahan` a LEFT JOIN  `dplega_102_kecamatan` b ON a.idKecamatan = b.idData  LEFT JOIN `dplega_101_wilayah` c ON b.idWilayah = c.idData  LEFT JOIN  `dplega_100_provinsi` d ON c.idProvinsi = d.idData ".$dumbQuery['kelurahan']." order by a.idData) as table_4";
							
				$result = $this->db->query($sql);
				if($result){
					// if(mysqli_num_rows($result) > 0) {
						// output data of each row
						// $statLoop  = 0;
						// $counter   = mysqli_num_rows($result);
						// $fetch 	   = array();
						// $record    = array();
						// $package   = array();
						// $group['provinsi'] = array();
						// $group['wilayah'] = array();
						// $group['kecamatan'] = array();
						// $group['kelurahan'] = array();
						// while($row = mysqli_fetch_assoc($result)) {
							
						// 	unset($fetch); $fetch = array();
						// 	$fetch = array(
						// 				"idData"   		=> $row['idData'],
						// 				"noreg"   		=> $row['code'],
						// 				"group"   	 	=> $row['target'],
						// 				"caption" 	 	=> $row['name'],
						// 				"references" 	=> $row['references'],
						// 				"referencesKey" => $row['referencesKey']
						// 			);
							
						// 	array_push($group[$row['group']], $fetch); 
						// }

						// $package = array(
						// 	"provinsi"  => $group['provinsi'],
						// 	"wilayah"   => $group['wilayah'],
						// 	"kecamatan" => $group['kecamatan'],
						// 	"kelurahan" => $group['kelurahan']
						// );

						$package = $result->fetchAll(PDO::FETCH_ASSOC);
						
						$resultList = array( "feedStatus" => "succes", "feedMessage" => "Data ditemukan!", "feedData" => $package);
					// }
				}else {
					$resultList = array( "feedStatus" => "succes", "feedMessage" => "Data tidak ditemukan!", "feedData" => array(array("provinsi" => '', "wilayah" => '', "kecamatan" => '', "kelurahan" => '')));
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