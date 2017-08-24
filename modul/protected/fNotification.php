<?php
	require_once('protected/config.php');
	function getData($data, $target){
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
		// f411 : provinsi
		// f412 : wilayah
		// f413 : kecamatan
		// f414 : kelurahan
		
		switch($target){
			case "f110": $resultList = getNotification($data); break;
			
			default	   : $resultList = array( "feedStatus" => "failed", "feedType" => "danger", "feedMessage" => "Terjadi kesalahan fatal, proses dibatalkan!", "feedData" => array()); break;
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function getNotification($data){
		/* initial condition */
		$resultList  = array();
		$table 		 = "";
		$field 		 = array();
		$readData	 = array();
		$readData2	 = array();
		$unReadData	 = array();
		$unReadData2	 = array();
		$collectData = array();
		$rows		 = 0;
		$condition 	 = "";
		$orderBy	 = "";
		$error		 = 0;
		$errorType   = "";
		$errorMsg	 = "";
	
		/* open connection */ 
		$gate = openGate();
		if($gate){		
			// connection = true
			$sql = 	
			"SELECT idData, deskripsi, waktu, targetUser, readStatus
			FROM dplega_901_notifications
			ORDER BY idData DESC
			";
					
			$result = mysqli_query($gate, $sql);
			if($result){
				$record    = array();  
				$fetch 	   = array(); 
				$group;
				if(mysqli_num_rows($result) > 0) {
					// output data of each row 
		// data    = [
		// 	{
		// 		'group': 'Baru', 'list':[
		// 			{'noreg': '1', 'time': '2017/06/1 10:15', 'caption': 'lorem dolor sit amet 2.'},
		// 			{'noreg': '2', 'time': '2017/05/30 10:15', 'caption': 'lorem dolor sit amet 3.'},
		// 			{'noreg': '3', 'time': '2017/05/29 10:15', 'caption': 'lorem dolor sit amet 4.'},
		// 		]
		// 	},
		// 	{
		// 		'group': 'Riwayat', 'list':[
		// 			{'noreg': '4', 'time': '2017/05/11 10:15', 'caption': 'lorem dolor sit amet 6.'},
		// 			{'noreg': '5', 'time': '2017/05/14 10:15', 'caption': 'lorem dolor sit amet 7.'},
		// 			{'noreg': '6', 'time': '2017/05/15 10:15', 'caption': 'lorem dolor sit amet 8.'},
		// 			{'noreg': '7', 'time': '2017/05/20 10:15', 'caption': 'lorem dolor sit amet 9.'},
		// 		]
		// 	},
		// ];
					while($row = mysqli_fetch_assoc($result)) {
						if($row["readStatus"] == 0){
							// $group = 'Baru';
							$unReadData = array(
								"idData"   			=> $row['idData'],
								"deskripsi" 		=> $row['deskripsi'],
								"waktu" 			=> $row['waktu'],
								"targetUser" 		=> $row['targetUser'],
								"readStatus" 		=> $row['readStatus']
							);
							array_push($unReadData2, $unReadData);
							unset($unReadData);
							$unReadData = array();
						}else{
							// $group = 'Riwayat';
							$readData = array(
								"idData"   			=> $row['idData'],
								"deskripsi" 		=> $row['deskripsi'],
								"waktu" 			=> $row['waktu'],
								"targetUser" 		=> $row['targetUser'],
								"readStatus" 		=> $row['readStatus']
							);
							array_push($readData2, $readData);
							unset($readData);
							$unReadData = array();
						}
							
					}
					$fetch = array(
								'group' => 'Baru',
								'list'	=> $unReadData2
							);
					$record = array(
								'group' => 'Riwayat',
								'list'	=> $readData2
							);
						array_push($collectData, $fetch);
						array_push($collectData, $record);
						// unset($unReadData); 
						// array_push($collectData, $readData); 
						unset($fetch); 
						unset($unReadData); 
						// $readData = array();
						$fetch = array();
						$unReadData = array();

					$resultList = array( "feedStatus" => "succes", "feedMessage" => "Data ditemukan!", "feedData" => $collectData);
				}else {
					$resultList = array( "feedStatus" => "succes", "feedMessage" => "Data tidak ditemukan!", "feedData" => 'gaadaan');
				}
			}			
				
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
?>