<?php
	if (session_status() == PHP_SESSION_NONE) {session_start();} // session start
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
		
		switch($target){
			case "f1110" : $resultList = getListLembagaan($data); break;
			case "f11101": $resultList = getListAllLembagaan($data); break;
			case "f1111" : $resultList = getDetailLembagaan($data); break;
			case "f1112" : $resultList = getFetchLembagaan($data); break;
			case "f1113" : $resultList = legalitasByNoreg($data); break;
			case "f1114" : $resultList = legalitasByBentukLembaga($data); break;
			case "f117"  : $resultList = getKoleksiSection($data); break;
			case "f119"  : $resultList = getPrestasiSection($data); break;
			case "f141"  : $resultList = getKoleksi($data); break;
			case "f151"  : $resultList = getVerifikasi($data); break;
			
			default	   : $resultList = array( "feedStatus" => "failed", "feedType" => "danger", "feedMessage" => "Terjadi kesalahan fatal, proses dibatalkan!", "feedData" => array()); break;
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function createData($data, $target){
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
			case "f111": $resultList = createKelembagaanSection($target, $data); break;
			case "f112": $resultList = createSejarahSection($target, $data); break;
			case "f113": $resultList = createSaranaSection($target, $data); break;
			case "f114": $resultList = createKepengurusanSection($target, $data); break;
			case "f115": $resultList = createKegiatanUsahaSection($target, $data); break;
			case "f116": $resultList = createVisualisasiUsahaSection($target, $data); break;
			case "f118": $resultList = createKoleksiSection($target, $data); break;
			case "f119": $resultList = createPrestasiSection($target, $data); break;
			case "f120": $resultList = createLegalitasSection($target, $data); break;
			case "f121": $resultList = createSejarahBantuanSection($target, $data); break;
			case "f122": $resultList = createHirarkiSection($target, $data); break;
			case "f151": $resultList = createCatatanVerifikasi($target, $data); break;
			case "f152": $resultList = createCatatanVerifikasi($target, $data); break;
			default	   : $resultList = array( "feedStatus" => "failed", "feedType" => "danger", "feedMessage" => "Terjadi kesalahan fatal, proses dibatalkan!"); break;
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function changeData($data, $target){
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
			case "f111": $resultList = changeKelembagaanSection($target, $data); break;
			case "f112": $resultList = changeSejarahSection($target, $data); break;
			case "f113": $resultList = changeSaranaSection($target, $data); break;
			case "f114": $resultList = changeKepengurusanSection($target, $data); break;
			case "f115": $resultList = changeKegiatanUsahaSection($target, $data); break;
			case "f116": $resultList = changeVisualisasiUsahaSection($target, $data); break;
			case "f123": $resultList = transferLembaga($target, $data); break;
			case "f117": $resultList = changeStatusVerifikasiLegalitas($target, $data); break;
			case "f118": $resultList = changeStatusVerifikasiVerifikasi($target, $data); break;
			case "f199": $resultList = moveLembaga($target, $data); break;
			default	   : $resultList = array( "feedStatus" => "failed", "feedType" => "danger", "feedMessage" => "Terjadi kesalahan fatal, proses dibatalkan!"); break;
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}
	
	function deleteData($data, $target){
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
			case "f111": $resultList = deleteKelembagaan($target, $data); break;
			case "f113": $resultList = deleteSaranaSection($target, $data); break;
			case "f116": $resultList = deleteVisualisasiUsahaSection($target, $data); break;
			case "f118": $resultList = deleteKoleksiSection($target, $data); break;
			case "f119": $resultList = deletePrestasiSection($target, $data); break;
			case "f120": $resultList = deleteLegalitasSection($target, $data); break;
			case "f121": $resultList = deleteSejarahBantuanSection($target, $data); break;
			case "f122": $resultList = deleteHirarkiSection($target, $data); break;
			default	  : $resultList = array( "feedStatus" => "failed", "feedType" => "danger", "feedMessage" => "Terjadi kesalahan fatal, proses dibatalkan!"); break;
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function getListLembagaan($data){
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
		$dumb		= "";
		$dumbQuery['keyword'] 		= ""; 
		$dumbQuery['refferences'] 	= ""; 
		$dumbQuery['provinsi'] 	= ""; 
		$dumbQuery['wilayah'] 	= ""; 
		$dumbQuery['kecamatan'] = ""; 
		$dumbQuery['kelurahan'] = ""; 
		$dumbFieldS	= "";
		$dumbQueryS	= "";

		//Validation 
		if(isset($data['refferences']) && $data['refferences'] != ""){	
			/* open connection */ 
			$gate = openGate();
			if($gate){		
				// connection = true
				$dumb = explode(',', $data['refferences']);
				if($dumb[0] == 'single') { $data['refferences'] = $dumb[1]; }
				else {
					$data['refferences'] 	=  $dumb[1];

					if(isset($dumb[2]) && $dumb[2] != "") { $dumbQuery['provinsi' ]	= "AND l.kodeProvinsi  = '".$dumb[2]."'"; }
					if(isset($dumb[3]) && $dumb[3] != "") { $dumbQuery['wilayah'  ]	= "AND l.kodeWilayah   = '".$dumb[3]."'"; }
					if(isset($dumb[4]) && $dumb[4] != "") { $dumbQuery['kecamatan']	= "AND l.kodeKecamatan = '".$dumb[4]."'"; }
					if(isset($dumb[5]) && $dumb[5] != "") { $dumbQuery['kelurahan']	= "AND l.kodeKelurahan = '".$dumb[5]."'"; }
				}

				/* AUTHENTICATION */
				if(
					   isset($_SESSION['login']) && $_SESSION['login'] == "yes" 
					&& isset($_SESSION['userLevel']) && $_SESSION['userLevel'] != "7"){
					switch ($_SESSION['lingkupArea']) {
						case '3': 
							$dumbFieldS = "l.kodeProvinsi"; 
							$dumbQueryS = ($dumbFieldS != "") ? "AND ".$dumbFieldS." = '".$_SESSION['idBatasArea']."'" : '';
							$dumbQuery['provinsi' ] = $dumbQueryS;
						break;
						case '2': 
							$dumbFieldS = "l.kodeWilayah"; 
							$dumbQueryS = ($dumbFieldS != "") ? "AND ".$dumbFieldS." = '".$_SESSION['idBatasArea']."'" : '';
							$dumbQuery['wilayah' ] = $dumbQueryS;
						break;
						case '1': 
							$dumbFieldS = "l.kodeKecamatan"; 
							$dumbQueryS = ($dumbFieldS != "") ? "AND ".$dumbFieldS." = '".$_SESSION['idBatasArea']."'" : '';
							$dumbQuery['kecamatan' ] = $dumbQueryS;
						break;
						default: break;
					}

					
				}
				/* AUTHENTICATION END */

				if(isset($data['keyword']) && $data['keyword'] != ""){	
					$dumbQuery['keyword'] = "
					AND
						( 	
							l.noRegistrasi		LIKE '%".$data['keyword']."%' OR 
							l.nama 				LIKE '%".$data['keyword']."%' 
						)
					";
				}

				if(isset($data['refferences']) && $data['refferences'] != ""){	
					$dumbQuery['refferences'] = "AND l.kodeBentukLembaga = '".$data['refferences']."' ";
				}

				$sql = 	
				"
					SELECT * FROM (
						SELECT  
							'Ajuan' as `group`,
							l.`noRegistrasi` as id,
							l.`noRegistrasi` as noreg,
							l.`nama` as nama,
							l.`noTelp` as telp,
							l.`email` as email,
							`username` as username,
							namaProvinsi as np,
							namaWilayah as nw,
							namaKecamatan as nc,
							namaKelurahan as nk,
							namaBentukLembaga as nb,
							CONCAT_WS(' ', l.`alamat`, 'RT.',l.`noRt`, '/', 'RW.', l.`noRw`, `namaKelurahan`, `namaKecamatan`, `namaWilayah`, `namaProvinsi`) as alamat,
							COALESCE(`urlGambarLogo`, '') as picture,
							l.createdDate as sort
						FROM 
							dplega_000_lembaga_temp l 
						LEFT JOIN
							dplega_100_provinsi p ON l.kodeProvinsi = p.idData
						LEFT JOIN
							dplega_101_wilayah w ON l.kodeWilayah = w.idData
						LEFT JOIN
							dplega_102_kecamatan kc ON l.kodeKecamatan = kc.idData
						LEFT JOIN
							dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData
						JOIN
							dplega_200_bentuklembaga bl ON l.kodeBentukLembaga = bl.kodeBentukLembaga
						JOIN
							dplega_910_user u ON l.noRegistrasi = u.noRegistrasi
						WHERE 
						l.statusAktif = '1'
						".$dumbQuery['refferences']."
						".$dumbQuery['keyword']."
						".$dumbQuery['provinsi' ]."
						".$dumbQuery['wilayah'  ]."
						".$dumbQuery['kecamatan']." 
						".$dumbQuery['kelurahan']." 
						 ORDER BY sort DESC
					) as table_1
					UNION
					SELECT * FROM (
						SELECT  
							'Perubahan' as `group`,
							l.`noRegistrasi` as id,
							l.`noRegistrasi` as noreg,
							l.`nama` as nama,
							l.`noTelp` as telp,
							l.`email` as email,
							`username` as username,
							namaProvinsi as np,
							namaWilayah as nw,
							namaKecamatan as nc,
							namaKelurahan as nk,
							namaBentukLembaga as nb,
							CONCAT_WS(' ', l.`alamat`, 'RT.',l.`noRt`, '/', 'RW.', l.`noRw`, `namaKelurahan`, `namaKecamatan`, `namaWilayah`, `namaProvinsi`) as alamat,
							COALESCE(`urlGambarLogo`, 'avatar-default.jpg') as picture,
							l.createdDate as sort
						FROM 
							dplega_000_lembaga_temp l 
						LEFT JOIN
							dplega_100_provinsi p ON l.kodeProvinsi = p.idData
						LEFT JOIN
							dplega_101_wilayah w ON l.kodeWilayah = w.idData
						LEFT JOIN
							dplega_102_kecamatan kc ON l.kodeKecamatan = kc.idData
						LEFT JOIN
							dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData
						JOIN
							dplega_200_bentuklembaga bl ON l.kodeBentukLembaga = bl.kodeBentukLembaga
						JOIN
							dplega_910_user u ON l.noRegistrasi = u.noRegistrasi
						WHERE 
						l.statusAktif = '2'
						".$dumbQuery['refferences']."
						".$dumbQuery['keyword']."
						".$dumbQuery['provinsi' ]."
						".$dumbQuery['wilayah'  ]."
						".$dumbQuery['kecamatan']." 
						".$dumbQuery['kelurahan']." 
						 ORDER BY sort DESC
					) as table_2
					UNION
					SELECT * FROM (
						SELECT  
							'Perubahan' as `group`,
							l.`noRegistrasi` as id,
							l.`noRegistrasi` as noreg,
							l.`nama` as nama,
							l.`noTelp` as telp,
							l.`email` as email,
							`username` as username,
							namaProvinsi as np,
							namaWilayah as nw,
							namaKecamatan as nc,
							namaKelurahan as nk,
							namaBentukLembaga as nb,
							CONCAT_WS(' ', l.`alamat`, 'RT.',l.`noRt`, '/', 'RW.', l.`noRw`, `namaKelurahan`, `namaKecamatan`, `namaWilayah`, `namaProvinsi`) as alamat,
							COALESCE(`urlGambarLogo`, 'avatar-default.jpg') as picture,
							l.createdDate as sort
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
						JOIN
							dplega_200_bentuklembaga bl ON l.kodeBentukLembaga = bl.kodeBentukLembaga
						JOIN
							dplega_910_user u ON l.noRegistrasi = u.noRegistrasi
						WHERE 
						l.statusAktif = '2'
						".$dumbQuery['refferences']."
						".$dumbQuery['keyword']."
						".$dumbQuery['provinsi' ]."
						".$dumbQuery['wilayah'  ]."
						".$dumbQuery['kecamatan']." 
						".$dumbQuery['kelurahan']." 
						 ORDER BY sort DESC
					) as table_2
					UNION
					SELECT * FROM (
						SELECT  
							'Valid' as `group`,
							l.`noRegistrasi` as id,
							l.`noRegistrasi` as noreg,
							l.`nama` as nama,
							l.`noTelp` as telp,
							l.`email` as email,
							`username` as username,
							namaProvinsi as np,
							namaWilayah as nw,
							namaKecamatan as nc,
							namaKelurahan as nk,
							namaBentukLembaga as nb,
							CONCAT_WS(' ', l.`alamat`, 'RT.',l.`noRt`, '/', 'RW.', l.`noRw`, `namaKelurahan`, `namaKecamatan`, `namaWilayah`, `namaProvinsi`) as alamat,
							COALESCE(`urlGambarLogo`, 'avatar-default.jpg') as picture,
							l.createdDate as sort
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
						JOIN
							dplega_200_bentuklembaga bl ON l.kodeBentukLembaga = bl.kodeBentukLembaga
						JOIN
							dplega_910_user u ON l.noRegistrasi = u.noRegistrasi
						WHERE 
						l.statusAktif = '1'
						".$dumbQuery['refferences']."
						".$dumbQuery['keyword']."
						".$dumbQuery['provinsi' ]."
						".$dumbQuery['wilayah'  ]."
						".$dumbQuery['kecamatan']." 
						".$dumbQuery['kelurahan']." 
						 ORDER BY sort DESC
					) as table_3
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					$package    = array();  
					$packageDumb= array();  
					$fetch 	    = array(); 
					$dataDumb['Ajuan']		= array(); 
					$dataDumb['Perubahan']	= array(); 
					$dataDumb['Valid']		= array(); 
				
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {

							$fetch = array(
								"id"   		=> $row['id'],
								"username" 	=> $row['username'],
								"noreg" 	=> $row['noreg'],
								"nama" 		=> $row['nama'],
								"telp" 		=> $row['telp'],
								"email"		=> $row['email'],
								"alamat"	=> $row['alamat'],
								"np"		=> $row['np'],
								"nw"		=> $row['nw'],
								"nc"		=> $row['nc'],
								"nk"		=> $row['nk'],
								"nb"		=> $row['nb'],
								"picture"	=> $row['picture']
							);
							
							array_push($dataDumb[$row['group']], $fetch); 
							unset($fetch); $fetch = array();
						}

						array_push($packageDumb, array("group" => "Ajuan", "collapse" => "n", "list" => $dataDumb['Ajuan']));
						array_push($packageDumb, array("group" => "Perubahan", "collapse" => "n", "list" => $dataDumb['Perubahan']));
						array_push($packageDumb, array("group" => "Valid", "collapse" => "n", "list" => $dataDumb['Valid']));
						
						/*session fetch*/
						$access1  = sessionFecth('kelembagaan');
						$access2  = sessionFecth('verifikasi');
						$options = array();

						if($access1['lihat']  == '1' || $_SESSION['userLevel'] == '7') array_push($options, array("selector" => "view-card", "icon" => "search", "label" => "Lihat selengkapnya"));
						// if($access1['lihat']  == '1') array_push($options, array("selector" => "download-card", "icon" => "download", "label" => "Unduh (.pdf)"));
						if($access2['tambah'] == '1' || $access2['ubah']   == '1' || $_SESSION['userLevel'] == '7') array_push($options, array("selector" => "verification-card", "icon" => "check", "label" => "Verifikasi"));
						if($access1['ubah']   == '1' || $_SESSION['userLevel'] == '7') array_push($options, array("selector" => "edit-card", "icon" => "pencil", "label" => "Ubah profil"));
						if($access1['hapus']  == '1' || $_SESSION['userLevel'] == '7') array_push($options, array("selector" => "delete-card", "icon" => "trash", "label" => "Hapus lembaga"));
						
						$package = array(
							"lembaga" => $packageDumb,
							"option" => $options
						);
						
						$resultList = array( "feedStatus" => "success", "feedMessage" => "Data ditemukan!", "feedData" => $package);
					}else {
						$resultList = array( "feedStatus" => "success", "feedMessage" => "Data tidak ditemukan!", "feedData" => array());
					}
				}			
					
				closeGate($gate);
			}else {
				//error state
				$error		= 1;
				$errorType  = "danger";
				$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else {
			//error state
			$error		= 1;
			$errorType  = "danger";
			$errorMsg	= "Terjadi kesalahan, tidak dapat menentukan refferences key!";
		} // return empty of array
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $errorType, "feedMessage" => $errorMsg);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function sessionFecth($module){
		$res = array();
		$res = $_SESSION['accessList'];

		switch ($module) {
			case 'kelembagaan':
				$res = $res[0];
				break;
			case 'verifikasi':
				$res = ((isset($res[6])) ? $res[6] : array("lihat" => "0", "tambah" => "0", "ubah"=> "0", "hapus"=> "0"));
				break;
			
			default:
				# code...
				break;
		}

		return $res;
	}

	function getListAllLembagaan($data){
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
		$dumb		= "";

		/* open connection */ 
		$gate = openGate();
		if($gate){		
			// connection = true
			$sql = 	
			"
				SELECT * FROM (
					SELECT  
						`noRegistrasi` as noreg,
						CONCAT_WS(' ', `namaBentukLembaga`, `nama`) as caption,
						CONCAT_WS(' ', `namaBentukLembaga`, `nama`, '|', `alamat`, 'RT.',`noRt`, '/', 'RW.', `noRw`, `namaKelurahan`, `namaKecamatan`, `namaWilayah`, `namaProvinsi`) as nama
					FROM 
						dplega_000_lembaga_temp l
					JOIN
						dplega_100_provinsi p ON l.kodeProvinsi = p.idData
					JOIN
						dplega_101_wilayah w ON l.kodeWilayah = w.idData
					JOIN
						dplega_102_kecamatan kc ON l.kodeKecamatan = kc.idData
					JOIN
						dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData 
					JOIN
						dplega_200_bentuklembaga b ON l.kodeBentukLembaga = b.kodeBentukLembaga 
					WHERE 
						l.statusAktif <> '0'
				) as table_1
				UNION
				SELECT * FROM (
					SELECT  
						`noRegistrasi` as noreg,
						CONCAT_WS(' ', `namaBentukLembaga`, `nama`) as caption,
						CONCAT_WS(' ', `namaBentukLembaga`, `nama`, '|', `alamat`, 'RT.',`noRt`, '/', 'RW.', `noRw`, `namaKelurahan`, `namaKecamatan`, `namaWilayah`, `namaProvinsi`) as nama
					FROM 
						dplega_000_lembaga l 
					JOIN
						dplega_100_provinsi p ON l.kodeProvinsi = p.idData
					JOIN
						dplega_101_wilayah w ON l.kodeWilayah = w.idData
					JOIN
						dplega_102_kecamatan kc ON l.kodeKecamatan = kc.idData
					JOIN
						dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData 
					JOIN
						dplega_200_bentuklembaga b ON l.kodeBentukLembaga = b.kodeBentukLembaga 
					WHERE 
						l.statusAktif <> '0'
				) as table_3
			";

			$result = mysqli_query($gate, $sql);
			if($result){
				$record		= array();  
				$fetch 	   = array(); 
				if(mysqli_num_rows($result) > 0) {
					// output data of each row 
					while($row = mysqli_fetch_assoc($result)) {
						$fetch = array(
							"noreg" 	=> $row['noreg'],
							"caption" 	=> $row['caption'],
							"nama" 		=> $row['nama']
						);
						
						array_push($record, $fetch); 
						unset($fetch); 
						$fetch = array();
					}
				}else {
					$record = array(
						"noreg" 	=> '',
						"caption" 	=> '',
						"nama" 		=> ''
					);
				}

				$resultList = array( "feedStatus" => "success", "feedMessage" => "Data ditemukan!", "feedData" => $record);
			}else{
				//error state
				$error		= 1;
				$errorType  = "danger";
				$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
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

	function getDetailLembagaan($data){
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
		$dumbTable  = "";
		$noreg 		= $data['refferences'];

		/* open connection */ 
		$gate = openGate();
		if($gate){		
			// connection = true
			//checking section
			$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
			$result = mysqli_query($gate, $sql);
			if(mysqli_num_rows($result) > 0) {
				$dumbTable = "";
			}else{
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "_temp";
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
				}
			}

			//profile
			$sql = 	"
				SELECT 
					COALESCE(l.`urlGambarLogo`, 'avatar-default.jpg') as avatar, 
					l.noRegistrasi as noreg, 
					l.nama,
					l.kodeBentukLembaga,
					b.namaBentukLembaga,
					l.catatanLain,
					l.noTelp as telp,
					l.email,
					l.mediaSosial,
					l.langitude,
					l.latitude,
					CONCAT_WS(' ', `alamat`, 'RT.',`noRt`, '/', 'RW.', `noRw`, `namaKelurahan`, `namaKecamatan`, `namaWilayah`, `namaProvinsi`) as alamat,
					`alamat` as alamat_single,
					`noRt` as noRt_single,
					`noRw` as noRw_single,
					l.`kodeProvinsi` as kodeProvinsi_single,
					l.`kodeWilayah` as kodeWilayah_single,
					l.`kodeKecamatan` as kodeKecamatan_single,
					l.`kodeKelurahan` as kodeKelurahan_single,
					`namaProvinsi` as namaProvinsi_single,
					`namaWilayah` as namaWilayah_single,
					`namaKecamatan` as namaKecamatan_single,
					`namaKelurahan` as namaKelurahan_single
				FROM
					dplega_000_lembaga".$dumbTable." l
				JOIN
					dplega_200_bentuklembaga b ON l.kodeBentukLembaga = b.kodeBentukLembaga
				LEFT JOIN
					dplega_100_provinsi p ON l.kodeProvinsi = p.idData
				LEFT JOIN
					dplega_101_wilayah w ON l.kodeWilayah = w.idData
				LEFT JOIN
					dplega_102_kecamatan kc ON l.kodeKecamatan = kc.idData
				LEFT JOIN
					dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData
				WHERE
					l.noRegistrasi = '".$noreg."'
			";
			
			$record    = array(); 
			$fetch 	   = array();  
			$profile   = array();  
			$detail    = array();  
			$option    = array();  
			$group     = array();  
			$items     = array();  
			$itemsPack = array();  

			if($error != 1){
				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$fetch = array(
										"avatar"   		=> $row['avatar'],
										"noreg" 		=> $row['noreg'],
										"nama" 			=> $row['nama'],
										"kodeBentukLembaga" => $row['kodeBentukLembaga'],
										"bentukLembaga" => $row['namaBentukLembaga'],
										"catatan"		=> $row['catatanLain'],
										"telp"			=> $row['telp'],
										"email"			=> $row['email'],
										"langitude"		=> $row['langitude'],
										"latitude"		=> $row['latitude'],
										"sosialMedia"	=> $row['mediaSosial'],
										"alamat"		=> $row['alamat'],
										"alamat_single"		=> $row['alamat_single'],
										"noRt_single"		=> $row['noRt_single'],
										"noRw_single"		=> $row['noRw_single'],
										"kodeProvinsi_single"		=> $row['kodeProvinsi_single'],
										"kodeWilayah_single"		=> $row['kodeWilayah_single'],
										"kodeKecamatan_single"		=> $row['kodeKecamatan_single'],
										"kodeKelurahan_single"		=> $row['kodeKelurahan_single'],
										"namaProvinsi_single"		=> $row['namaProvinsi_single'],
										"namaWilayah_single"		=> $row['namaWilayah_single'],
										"namaKecamatan_single"		=> $row['namaKecamatan_single'],
										"namaKelurahan_single"		=> $row['namaKelurahan_single']
							);
						}

						array_push($profile, $fetch); 
						unset($fetch); 
						$fetch = array();
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}			
			}

			
			if($error != 1){
				//kelembagaan
				$sql = 	"
					SELECT 
						namaBidangGerak, 
						jumlahPengurus,
						organisasiAfiliasi,
						visiLembaga,
						misiLembaga
					FROM
						dplega_000_lembaga".$dumbTable." l
						LEFT JOIN
						dplega_210_bidanggerak b
					ON l.kodeBidangGerak = b.kodeBidangGerak
					WHERE
					l.noRegistrasi = '".$noreg."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							array_push($items, array("label" => 'Bergerak dalam bidang', "text" => $row['namaBidangGerak'])); 
							array_push($items, array("label" => 'Jumlah pengurus', "text" => $row['jumlahPengurus'])); 
							array_push($items, array("label" => 'Afiliasi', "text" => $row['organisasiAfiliasi'])); 
							array_push($items, array("label" => 'Visi', "text" => $row['visiLembaga'])); 
							array_push($items, array("label" => 'Misi', "text" => $row['misiLembaga'])); 
						}
					}else{
						array_push($items, array("label" => 'Bergerak dalam bidang', "text" => '')); 
						array_push($items, array("label" => 'Jumlah pengurus', "text" => '')); 
						array_push($items, array("label" => 'Afiliasi', "text" => '')); 
						array_push($items, array("label" => 'Visi', "text" => '')); 
						array_push($items, array("label" => 'Misi', "text" => '')); 
					}

					array_push($group, array(
						"groupId" => "kelembagaan", "groupName" => "Kelembagaan", "group" => "card", "type" => "table",
						"items" => $items
					));

					unset($items); 
					$items = array();
				}

				
				//legalitas
				$sql = 	"
					SELECT 
						p.namaPersyaratan, 
						l.noLegalitas,
						l.tanggalLegalitas,
						l.urlFile
					FROM
						dplega_009_legalitas".$dumbTable." l
					JOIN
						dplega_201_persyaratan p
					ON l.kodePersyaratan = p.kodePersyaratan
					WHERE
						l.noRegistrasi = '".$noreg."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							array_push($items, array('color' => 'purple', 'icon' => 'file-text', 'size' => 'large', 'form' => 'text-icon', 'text' => $row['namaPersyaratan'])); 
							array_push($items, array('color' => '', 'icon' => '', 'size' => 'medium', 'form' => 'text', 'text' => $row['noLegalitas'])); 
							array_push($items, array('color' => '', 'icon' => '', 'size' => 'small', 'form' => 'text', 'text' => $row['tanggalLegalitas'])); 
							array_push($items, array('color' => '', 'icon' => '', 'size' => 'medium', 'form' => 'button', 'text' => $row['urlFile'], 'preview' => "img/legalitas/".$row['urlFile'])); 
							 
							array_push($itemsPack, array("set" => $items));

							unset($items); 
							$items = array();
						}
					}else{

						$sql = 	"
							SELECT 
								namaPersyaratan
							FROM
								dplega_000_lembaga".$dumbTable." l
							JOIN
								dplega_201_persyaratan p ON l.kodeBentukLembaga = p.kodeBentukLembaga
							WHERE
								l.noRegistrasi = '".$noreg."'
						";

						$result = mysqli_query($gate, $sql);
						if($result){
							if(mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
									array_push($items, array('color' => 'purple', 'icon' => 'file-text', 'size' => 'large', 'form' => 'text-icon', 'text' => $row['namaPersyaratan'])); 
									array_push($items, array('color' => '', 'icon' => '', 'size' => 'large', 'form' => 'text', 'text' => '(Data tidak ditemukan)')); 
									array_push($items, array('color' => '', 'icon' => '', 'size' => 'large', 'form' => 'button', 'text' => ''));
									array_push($itemsPack, array("set" => $items));

									unset($items); 
									$items = array();
								}
							}else{
								array_push($items, array('color' => '', 'icon' => '', 'size' => 'large', 'form' => 'text-icon', 'text' => '(Data tidak ditemukan)')); 
								array_push($items, array('color' => '', 'icon' => '', 'size' => 'large', 'form' => 'text', 'text' => '')); 
								array_push($items, array('color' => '', 'icon' => '', 'size' => 'large', 'form' => 'text', 'text' => '')); 

								array_push($itemsPack, array("set" => $items));

								unset($items); 
								$items = array();
							}
						}
						
					}

					array_push($group, array(
						"groupId" => "legalitas", "groupName" => "Legalitas", "group" => "card", "type" => "table-list",
						"items" => $itemsPack
					));

					unset($itemsPack); 
					$itemsPack = array();
				}

				
				//sejarah
				$sql = 	"
					SELECT 
						deskripsi, 
						tanggalDidirikan,
						kepemilikan,
						statusSertifikasi,
						CONCAT_WS(' ', luasTanah, satuanLuasTanah) as `luasTanah`,
						CONCAT_WS(' ', luasBangunan, SatuanLuasBangunan) as `luasBangunan`,
						kondisiBangunan,
						jumlahBangunan,
						statusSarana,
						statusStrukturKepengurusan,
						bahasaPengantar,
						statusSensus,
						statusBantuanPemerintah,
						kondisiGeografis,
						potensiWilayah,
						jenisWilayah,
						catatanLain
					FROM
						dplega_001_sejarah".$dumbTable." l
					WHERE
					l.noRegistrasi = '".$noreg."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							array_push($items, array("label" => 'Sejarah singkat', "text" => $row['deskripsi'])); 
							array_push($items, array("label" => 'Tanggal didirikan', "text" => $row['tanggalDidirikan'])); 
							array_push($items, array("label" => 'Kepemilikan', "text" => $row['kepemilikan'])); 
							array_push($items, array("label" => 'Sertifikasi', "text" => $row['statusSertifikasi'])); 
							array_push($items, array("label" => 'Luas tanah', "text" => $row['luasTanah'])); 
							array_push($items, array("label" => 'Luas bangunan', "text" => $row['luasBangunan'])); 
							array_push($items, array("label" => 'Kondisi bangunan', "text" => $row['kondisiBangunan'])); 
							array_push($items, array("label" => 'Jumlah bangunan', "text" => $row['jumlahBangunan'])); 
							array_push($items, array("label" => 'Sarana / Prasarana', "text" => $row['statusSarana'])); 
							array_push($items, array("label" => 'Struktur organisasi', "text" => $row['statusStrukturKepengurusan'])); 
							array_push($items, array("label" => 'Bahasa pengantar', "text" => $row['bahasaPengantar'])); 
							array_push($items, array("label" => 'Sensus', "text" => $row['statusSarana'])); 
							array_push($items, array("label" => 'Bantuan pemerintah', "text" => $row['statusBantuanPemerintah'])); 
							array_push($items, array("label" => 'Kondisi geografis', "text" => $row['statusBantuanPemerintah'])); 
							array_push($items, array("label" => 'Potensi wilayah', "text" => $row['potensiWilayah'])); 
							array_push($items, array("label" => 'Jenis wilayah', "text" => $row['jenisWilayah'])); 
							array_push($items, array("label" => 'Catatan', "text" => $row['catatanLain'])); 
						}
					}else{
						array_push($items, array("label" => 'Sejarah singkat', "text" => '')); 
						array_push($items, array("label" => 'Tanggal didirikan', "text" => '')); 
						array_push($items, array("label" => 'Kepemilikan', "text" => '')); 
						array_push($items, array("label" => 'Sertifikasi', "text" => '')); 
						array_push($items, array("label" => 'Luas tanah', "text" => '')); 
						array_push($items, array("label" => 'Luas bangunan', "text" => '')); 
						array_push($items, array("label" => 'Kondisi bangunan', "text" => '')); 
						array_push($items, array("label" => 'Jumlah bangunan', "text" => '')); 
						array_push($items, array("label" => 'Sarana / Prasarana', "text" => '')); 
						array_push($items, array("label" => 'Struktur organisasi', "text" => '')); 
						array_push($items, array("label" => 'Bahasa pengantar', "text" => '')); 
						array_push($items, array("label" => 'Sensus', "text" => '')); 
						array_push($items, array("label" => 'Bantuan pemerintah', "text" => '')); 
						array_push($items, array("label" => 'Kondisi geografis', "text" => '')); 
						array_push($items, array("label" => 'Potensi wilayah', "text" => '')); 
						array_push($items, array("label" => 'Jenis wilayah', "text" => '')); 
						array_push($items, array("label" => 'Catatan', "text" => '')); 
					}

					array_push($group, array(
						"groupId" => "sejarah", "groupName" => "Sejarah", "group" => "card", "type" => "table",
						"items" => $items
					));

					unset($items); 
					$items = array();
				}


				//kepengurusan
				$sql = 	"
					SELECT 
						penanggungJawab, 
						CONCAT_WS(' ', `alamat`, 'RT.',`noRt`, '/', 'RW.', `noRw`, `namaKelurahan`, `namaKecamatan`, `namaWilayah`, `namaProvinsi`) as alamat,
						noTelp,
						kewarganegaraan,
						CONCAT_WS(' ', tempatLahir, tanggalLahir) as `ttl`,
						jenisKelamin,
						agama,
						jabatanLain,
						pendidikan,
						kompetensi,
						catatan
					FROM
						dplega_002_kepengurusan".$dumbTable." l
					LEFT JOIN
						dplega_100_provinsi p ON l.kodeProvinsi = p.idData
					LEFT JOIN
						dplega_101_wilayah w ON l.kodeWilayah = w.idData
					LEFT JOIN
						dplega_102_kecamatan kc ON l.kodeKecamatan = kc.idData
					LEFT JOIN
						dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData
					WHERE
					l.noRegistrasi = '".$noreg."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							array_push($items, array("label" => 'Penanggung jawab', "text" => $row['penanggungJawab'])); 
							array_push($items, array("label" => 'Alamat', "text" => $row['alamat'])); 
							array_push($items, array("label" => 'Telp', "text" => $row['noTelp'])); 
							array_push($items, array("label" => 'Kewarganegaraan', "text" => $row['kewarganegaraan'])); 
							array_push($items, array("label" => 'Tempat, tanggal lahir', "text" => $row['ttl'])); 
							array_push($items, array("label" => 'Jenis kelamin', "text" => $row['jenisKelamin'])); 
							array_push($items, array("label" => 'Agama', "text" => $row['agama'])); 
							array_push($items, array("label" => 'Jabatan lain', "text" => $row['jabatanLain'])); 
							array_push($items, array("label" => 'Pendidikan', "text" => $row['pendidikan'])); 
							array_push($items, array("label" => 'Kompetensi', "text" => $row['kompetensi'])); 
							array_push($items, array("label" => 'Catatan', "text" => $row['catatan'])); 
						}
					}else{
						array_push($items, array("label" => 'Penanggung jawab', "text" => '')); 
						array_push($items, array("label" => 'Alamat', "text" => '')); 
						array_push($items, array("label" => 'Telp', "text" => '')); 
						array_push($items, array("label" => 'Kewarganegaraan', "text" => '')); 
						array_push($items, array("label" => 'Tempat, tanggal lahir', "text" => '')); 
						array_push($items, array("label" => 'Jenis kelamin', "text" => '')); 
						array_push($items, array("label" => 'Agama', "text" => '')); 
						array_push($items, array("label" => 'Jabatan lain', "text" => '')); 
						array_push($items, array("label" => 'Pendidikan', "text" => '')); 
						array_push($items, array("label" => 'Kompetensi', "text" => '')); 
						array_push($items, array("label" => 'Catatan', "text" => '')); 
					}

					array_push($group, array(
						"groupId" => "kepengurusan", "groupName" => "Kepengurusan", "group" => "card", "type" => "table",
						"items" => $items
					));

					unset($items); 
					$items = array();
				}


				//kegiatan usaha
				$sql = 	"
					SELECT 
						namaUsaha, 
						detailUsaha,
						jenisUsaha,
						jumlahPekerja,
						catatan
					FROM
						dplega_003_usaha".$dumbTable." l
					WHERE
					l.noRegistrasi = '".$noreg."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							array_push($items, array("label" => 'Nama usaha', "text" => $row['namaUsaha'])); 
							array_push($items, array("label" => 'Detail usaha', "text" => $row['detailUsaha'])); 
							array_push($items, array("label" => 'Jenis usaha', "text" => $row['jenisUsaha'])); 
							array_push($items, array("label" => 'Jumlah pekerja', "text" => $row['jumlahPekerja'])); 
							array_push($items, array("label" => 'Catatan', "text" => $row['catatan'])); 
						}
					}else{
						array_push($items, array("label" => 'Nama usaha', "text" => '')); 
						array_push($items, array("label" => 'Detail usaha', "text" => '')); 
						array_push($items, array("label" => 'Jenis usaha', "text" => '')); 
						array_push($items, array("label" => 'Jumlah pekerja', "text" => '')); 
						array_push($items, array("label" => 'Catatan', "text" => '')); 
					}

					array_push($group, array(
						"groupId" => "kegiatan-usaha", "groupName" => "Kegiatan usaha", "group" => "card", "type" => "table",
						"items" => $items
					));

					unset($items); 
					$items = array();
				}


				//koleksi
				$sql = 	"
					SELECT 
						judulKoleksi
					FROM
						dplega_005_koleksi".$dumbTable." l
					WHERE
						l.noRegistrasi = '".$noreg."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							array_push($items, array('color' => 'sky', 'icon' => 'book', 'text' => $row['judulKoleksi'])); 
						}
					}else{
						array_push($items, array('color' => '', 'icon' => '', 'text' => '')); 
					}

					array_push($group, array(
						"groupId" => "koleksi", "groupName" => "Koleksi", "group" => "card", "type" => "list",
						"items" => $items
					));

					unset($items); 
					$items = array();
				}

				//prestasi
				$sql = 	"
					SELECT 
						deskripsi
					FROM
						dplega_006_prestasi".$dumbTable." l
					WHERE
						l.noRegistrasi = '".$noreg."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							array_push($items, array('color' => 'yellow', 'icon' => 'trophy', 'text' => $row['deskripsi'])); 
						}
					}else{
						array_push($items, array('color' => '', 'icon' => '', 'text' => '')); 
					}

					array_push($group, array(
						"groupId" => "prestasi", "groupName" => "Prestasi", "group" => "card", "type" => "list",
						"items" => $items
					));

					unset($items); 
					$items = array();
				}


				//visualisasi sarana
				$sql = 	"
					SELECT 
						urlGambar,
						deskripsi
					FROM
						dplega_008_visualisasisarana".$dumbTable." l
					WHERE
						l.noRegistrasi = '".$noreg."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						$state = 0;
						while($row = mysqli_fetch_assoc($result)) {
							array_push($items, array('picture' => 'saranaPrasarana/'.$row['urlGambar'], 'desc' => $row['deskripsi'])); 
							$state++;
						}

						for($loop=$state;$loop<4;$loop++){
							array_push($items, array('picture' => 'saranaPrasarana/picture.png', 'desc' => '')); 
						}
					}else{
						array_push($items, array('picture' => 'saranaPrasarana/picture.png', 'desc' => ''));
						array_push($items, array('picture' => 'saranaPrasarana/picture.png', 'desc' => ''));
						array_push($items, array('picture' => 'saranaPrasarana/picture.png', 'desc' => ''));
						array_push($items, array('picture' => 'saranaPrasarana/picture.png', 'desc' => ''));
					}

					array_push($group, array(
						"groupId" => "saranaPrasarana", "groupName" => "Sarana / prasarana", "group" => "img-viewer", "type" => "",
						"items" => $items
					));

					unset($items); 
					$items = array();
				}

				//visualisasi usaha
				$sql = 	"
					SELECT 
						urlGambar,
						deskripsi
					FROM
						dplega_007_visualisasiusaha".$dumbTable." l
					WHERE
						l.noRegistrasi = '".$noreg."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						$state = 0;
						while($row = mysqli_fetch_assoc($result)) {
							array_push($items, array('picture' => 'usaha/'.$row['urlGambar'], 'desc' => $row['deskripsi'])); 
							$state++;
						}

						for($loop=$state;$loop<4;$loop++){
							array_push($items, array('picture' => 'usaha/picture.png', 'desc' => '')); 
						}
					}else{
						array_push($items, array('picture' => 'usaha/picture.png', 'desc' => '')); 
						array_push($items, array('picture' => 'usaha/picture.png', 'desc' => '')); 
						array_push($items, array('picture' => 'usaha/picture.png', 'desc' => '')); 
						array_push($items, array('picture' => 'usaha/picture.png', 'desc' => '')); 
					}

					array_push($group, array(
						"groupId" => "kegiatanUsaha", "groupName" => "Kegiatan usaha", "group" => "img-viewer", "type" => "",
						"items" => $items
					));

					unset($items); 
					$items = array();
				}

				//end
			}

			closeGate($gate);

			if($_SESSION["userLevel"] == '1'){
				$options = array(
					// array("selector" => "download-card", "icon" => "download", "label" => "Unduh (.pdf) - non aktif"),
					array("selector" => "edit-card", "icon" => "pencil", "label" => "Ubah profil"),
					array("selector" => "user-card", "icon" => "gears", "label" => "Pengaturan"),
					array("selector" => "logout-card", "icon" => "power-off", "label" => "Keluar")
				);
			}else{
				/*session fetch*/
				$access1  = sessionFecth('kelembagaan');
				$access2  = sessionFecth('verifikasi');
				$options = array();

				if($access1['lihat']  == '1' || $_SESSION['userLevel'] == '7') array_push($options, array("selector" => "view-card", "icon" => "search", "label" => "Lihat selengkapnya"));
				// if($access1['lihat']  == '1') array_push($options, array("selector" => "download-card", "icon" => "download", "label" => "Unduh (.pdf)"));
				if($access2['tambah'] == '1' || $access2['ubah']   == '1' || $_SESSION['userLevel'] == '7') array_push($options, array("selector" => "verification-card", "icon" => "check", "label" => "Verifikasi"));
				if($access1['ubah']   == '1' || $_SESSION['userLevel'] == '7') array_push($options, array("selector" => "edit-card", "icon" => "pencil", "label" => "Ubah profil"));
				if($access1['hapus']  == '1' || $_SESSION['userLevel'] == '7') array_push($options, array("selector" => "delete-card", "icon" => "trash", "label" => "Hapus lembaga"));
			}

			$record = array(
				"profile" => $profile,
				"detail"  => $group,
				"option"  => $options
			);

			$resultList = array( "feedStatus" => "success", "feedMessage" => "Data ditemukan!", "feedData" => $record);
		}

		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $errorType, "feedMessage" => $errorMsg, "feedData" => array());
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}


	function getFetchLembagaan($data){
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
		$dumbTable  = "";
		$noreg 		= $data['refferences'];

		/* open connection */ 
		$gate = openGate();
		if($gate){		
			// connection = true
			//checking section
			$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
			$result = mysqli_query($gate, $sql);
			if(mysqli_num_rows($result) > 0) {
				$dumbTable = "";
			}else{
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "_temp";
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
				}
			}


			$record    		= array(); 
			$fetch 	   		= array();  
			$kelembagaan  	= array();  
			$legalitas    	= array();  
			$sejarah   		= array();  
			$bantuan   		= array();  
			$sarana   		= array();  
			$kepengurusan   = array();  
			$usaha     		= array();  
			$vUsaha    		= array();  
			$hirarki 		= array();  
			$koleksi 		= array();  
			$prestasi 		= array(); 

			if($error != 1){
				//kelembagaan
				$sql = 	"
					SELECT 
						l.`noRegistrasi`, 
						l.`nama`, 
						l.`alamat`, 
						l.`noRt`, 
						l.`noRw`, 
						l.`kodeKelurahan`, 
						`namaKelurahan`, 
						l.`kodeKecamatan`, 
						`namaKecamatan`, 
						l.`kodeWilayah`, 
						`namaWilayah`, 
						l.`kodeProvinsi`, 
						`namaProvinsi`,  
						l.`noTelp`, 
						l.`email`, 
						l.`langitude`, 
						l.`latitude`, 
						l.`mediaSosial`, 
						b.`namaBentukLembaga`, 
						l.`kodeBentukLembaga`, 
						l.`kodeBidangGerak`, 
						l.`jumlahPengurus`, 
						l.`noNpwp`, 
						l.`visiLembaga`, 
						l.`misiLembaga`, 
						l.`organisasiAfiliasi`, 
						l.`catatanLain`, 
						l.`urlGambarLogo`
					FROM
						dplega_000_lembaga".$dumbTable." l
					JOIN
						dplega_200_bentuklembaga b ON l.kodeBentukLembaga = b.kodeBentukLembaga
					JOIN
						dplega_100_provinsi p ON l.kodeProvinsi = p.idData
					JOIN
						dplega_101_wilayah w ON l.kodeWilayah = w.idData
					JOIN
						dplega_102_kecamatan kc ON l.kodeKecamatan = kc.idData
					JOIN
						dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData
					WHERE
						l.noRegistrasi = '".$noreg."'
				";
				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$kelembagaan = array(
										"noRegistrasi"   	=> $row['noRegistrasi'],
										"nama" 				=> $row['nama'],
										"alamat" 			=> $row['alamat'],
										"noRt" 				=> $row['noRt'],
										"noRw" 				=> $row['noRw'],
										"kodeKelurahan"		=> $row['kodeKelurahan'],
										"namaKelurahan"		=> $row['namaKelurahan'],
										"kodeKecamatan"		=> $row['kodeKecamatan'],
										"namaKecamatan"		=> $row['namaKecamatan'],
										"kodeWilayah"		=> $row['kodeWilayah'],
										"namaWilayah"		=> $row['namaWilayah'],
										"kodeProvinsi"		=> $row['kodeProvinsi'],
										"namaProvinsi"		=> $row['namaProvinsi'],
										"noTelp"			=> $row['noTelp'],
										"email"				=> $row['email'],
										"langitude"			=> $row['langitude'],
										"latitude"			=> $row['latitude'],
										"mediaSosial"		=> $row['mediaSosial'],
										"namaBentukLembaga"	=> $row['namaBentukLembaga'],
										"kodeBentukLembaga"	=> $row['kodeBentukLembaga'],
										"kodeBidangGerak"	=> $row['kodeBidangGerak'],
										"jumlahPengurus"	=> $row['jumlahPengurus'],
										"noNpwp"			=> $row['noNpwp'],
										"visiLembaga"		=> $row['visiLembaga'],
										"misiLembaga"		=> $row['misiLembaga'],
										"organisasiAfiliasi"=> $row['organisasiAfiliasi'],
										"catatanLain"		=> $row['catatanLain'],
										"urlGambarLogo"		=> $row['urlGambarLogo']
							);
						}
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
				}	

				//legalitas
				$kodeBentukLembaga = mysqli_fetch_assoc(mysqli_query($gate, "SELECT kodeBentukLembaga FROM dplega_000_lembaga".$dumbTable." WHERE noRegistrasi = '".$noreg."'"));
				$kodeBentukLembaga = $kodeBentukLembaga['kodeBentukLembaga'];

				$sql = 	"
					SELECT 
						`kodePersyaratan`, 
						`namaPersyaratan`
					FROM
						dplega_201_persyaratan
					WHERE
						kodeBentukLembaga = '".$kodeBentukLembaga."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$sql = 	"
								SELECT 
									noLegalitas,
									tanggalLegalitas,
									urlFile
								FROM
									dplega_009_legalitas".$dumbTable."
								WHERE
									kodePersyaratan = '".$row['kodePersyaratan']."'
								AND noRegistrasi = '".$noreg."'
							";

							$res = mysqli_query($gate, $sql);
							if($res){
								if(mysqli_num_rows($res) > 0) {
									// output data of each row 
									while($rowf = mysqli_fetch_assoc($res)) {
										$fetch = array (
											"noRegistrasi" 		=> $noreg,
											"kodePersyaratan" 	=> $row['kodePersyaratan'],
											"namaLegalitas" 	=> $row['namaPersyaratan'],
											"noLegalitas" 		=> $rowf['noLegalitas'],
											"tanggalLegalitas" 	=> $rowf['tanggalLegalitas'],
											"urlFile" 			=> $rowf['urlFile']
										);
									}
								}else{
									$fetch = array (
										"noRegistrasi" 		=> $noreg,
										"kodePersyaratan" 	=> $row['kodePersyaratan'],
										"namaLegalitas" 	=> $row['namaPersyaratan'],
										"noLegalitas" 		=> '',
										"tanggalLegalitas" 	=> '',
										"urlFile" 			=> ''
									);
								}
							}

							array_push($record, $fetch);
							unset($fetch);
							$fetch = array();
						}

						$legalitas = array(
									"noRegistrasi"   	=> $noreg,
									"items" 			=> $record
						);

						unset($record);
						$record = array();
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}

				//sejarah
				$sql = 	"
					SELECT 
						`noRegistrasi`, 
						`deskripsi`, 
						`tanggalDidirikan`, 
						`kepemilikan`, 
						`statusTanah`, 
						`statusSertifikasi`, 
						`luasTanah`, 
						`satuanLuasTanah`, 
						`luasBangunan`, 
						`satuanLuasBangunan`, 
						`kondisiBangunan`, 
						`JumlahBangunan`, 
						`statusSarana`, 
						`statusStrukturKepengurusan`, 
						`urlGambarStrukturKepengurusan`, 
						`bahasaPengantar`, 
						`statusSensus`, 
						`statusBantuanPemerintah`, 
						`kondisiGeografis`, 
						`potensiWilayah`, 
						`jenisWilayah`, 
						`catatanLain`
					FROM
						dplega_001_sejarah".$dumbTable." l
					WHERE
						l.noRegistrasi = '".$noreg."'
				";
				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$sejarah = array(
										"noRegistrasi"   				=> $row['noRegistrasi'],
										"deskripsi" 					=> $row['deskripsi'],
										"tanggalDidirikan" 				=> $row['tanggalDidirikan'],
										"kepemilikan" 					=> $row['kepemilikan'],
										"statusTanah" 					=> $row['statusTanah'],
										"statusSertifikasi"				=> $row['statusSertifikasi'],
										"luasTanah"						=> $row['luasTanah'],
										"satuanLuasTanah"				=> $row['satuanLuasTanah'],
										"luasBangunan"					=> $row['luasBangunan'],
										"satuanLuasBangunan"			=> $row['satuanLuasBangunan'],
										"kondisiBangunan"				=> $row['kondisiBangunan'],
										"JumlahBangunan"				=> $row['JumlahBangunan'],
										"statusSarana"					=> $row['statusSarana'],
										"statusStrukturKepengurusan"	=> $row['statusStrukturKepengurusan'],
										"urlGambarStrukturKepengurusan"	=> $row['urlGambarStrukturKepengurusan'],
										"bahasaPengantar"				=> $row['bahasaPengantar'],
										"statusSensus"					=> $row['statusSensus'],
										"statusBantuanPemerintah"		=> $row['statusBantuanPemerintah'],
										"kondisiGeografis"				=> $row['kondisiGeografis'],
										"potensiWilayah"				=> $row['potensiWilayah'],
										"jenisWilayah"					=> $row['jenisWilayah'],
										"catatanLain"					=> $row['catatanLain']
							);
						}
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}


				//bantuan
				$sql = 	"
					SELECT 
						`idData`, 
						`noRegistrasi`, 
						`tahun`, 
						`dibantuOleh`, 
						`deskripsi`
					FROM
						dplega_010_riwayatbantuan".$dumbTable." l
					WHERE
						l.noRegistrasi = '".$noreg."'
				";
				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$fetch = array(
										"idData"   			=> $row['idData'],
										"noreg"   			=> $row['noRegistrasi'],
										"tahun" 			=> $row['tahun'],
										"bantuanDari" 		=> $row['dibantuOleh'],
										"deskripsi" 		=> $row['deskripsi'],
							);

							array_push($bantuan, $fetch);
							unset($fetch);
							$fetch = array();
						}
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}


				//sarana
				$sql = 	"
					SELECT * FROM (
						SELECT 
							`idData`, 
							`noRegistrasi`, 
							`urlGambar`, 
							`deskripsi`
						FROM
							dplega_008_visualisasisarana".$dumbTable." l
						WHERE
							l.noRegistrasi = '".$noreg."'
						ORDER BY idData DESC LIMIT 4
					) as tabel_temp ORDER By idData ASC
				";
				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$fetch = array(
										"idData"   			=> $row['idData'],
										"noreg"   			=> $row['noRegistrasi'],
										"urlGambar" 		=> $row['urlGambar'],
										"deskripsi" 		=> $row['deskripsi'],
							);

							array_push($sarana, $fetch);
							unset($fetch);
							$fetch = array();
						}
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}


				//kepengurusan
				$sql = 	"
					SELECT 
						l.`noRegistrasi`, 
						l.`penanggungJawab`, 
						l.`jabatan`, 
						l.`alamat`, 
						l.`noRt`, 
						l.`noRw`, 
						`namaKelurahan`, 
						l.`kodeKelurahan`, 
						`namaKecamatan`, 
						l.`kodeKecamatan`, 
						`namaWilayah`, 
						l.`kodeWilayah`, 
						`namaProvinsi`, 
						l.`kodeProvinsi`, 
						l.`noTelp`, 
						l.`kewarganegaraan`, 
						l.`tempatLahir`, 
						l.`tanggalLahir`, 
						l.`jenisKelamin`, 
						l.`agama`, 
						l.`jabatanLain`, 
						l.`pendidikan`, 
						l.`kompetensi`, 
						l.`catatan`
					FROM
						dplega_002_kepengurusan".$dumbTable." l
					JOIN
						dplega_100_provinsi p ON l.kodeProvinsi = p.idData
					JOIN
						dplega_101_wilayah w ON l.kodeWilayah = w.idData
					JOIN
						dplega_102_kecamatan kc ON l.kodeKecamatan = kc.idData
					JOIN
						dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData
					WHERE
						l.noRegistrasi = '".$noreg."'
				";
				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$kepengurusan = array(
										"noRegistrasi"   	=> $row['noRegistrasi'],
										"penanggungJawab" 	=> $row['penanggungJawab'],
										"jabatan" 			=> $row['jabatan'],
										"alamat" 			=> $row['alamat'],
										"noRt" 				=> $row['noRt'],
										"noRw"				=> $row['noRw'],
										"namaKelurahan"		=> $row['namaKelurahan'],
										"kodeKelurahan"		=> $row['kodeKelurahan'],
										"namaKecamatan"		=> $row['namaKecamatan'],
										"kodeKecamatan"		=> $row['kodeKecamatan'],
										"namaWilayah"		=> $row['namaWilayah'],
										"kodeWilayah"		=> $row['kodeWilayah'],
										"namaProvinsi"		=> $row['namaProvinsi'],
										"kodeProvinsi"		=> $row['kodeProvinsi'],
										"noTelp"			=> $row['noTelp'],
										"kewarganegaraan"	=> $row['kewarganegaraan'],
										"tempatLahir"		=> $row['tempatLahir'],
										"tanggalLahir"		=> $row['tanggalLahir'],
										"jenisKelamin"		=> $row['jenisKelamin'],
										"agama"				=> $row['agama'],
										"jabatanLain"		=> $row['jabatanLain'],
										"pendidikan"		=> $row['pendidikan'],
										"kompetensi"		=> $row['kompetensi'],
										"catatan"			=> $row['catatan']
							);
						}
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}	


				//kegiatan usaha
				$sql = 	"
					SELECT 
						`noRegistrasi`, 
						`namaUsaha`, 
						`jenisUsaha`, 
						`detailUsaha`, 
						`jumlahPekerja`, 
						`catatan`
					FROM
						dplega_003_usaha".$dumbTable." l
					WHERE
						l.noRegistrasi = '".$noreg."'
				";
				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$usaha = array(
										"noRegistrasi"  => $row['noRegistrasi'],
										"namaUsaha" 	=> $row['namaUsaha'],
										"jenisUsaha" 	=> $row['jenisUsaha'],
										"detailUsaha"	=> $row['detailUsaha'],
										"jumlahPekerja"	=> $row['jumlahPekerja'],
										"catatan"		=> $row['catatan']
							);
						}
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}

				//visuaisasi usaha
				$sql = 	"
					SELECT * FROM (
						SELECT 
							`idData`, 
							`noRegistrasi`, 
							`urlGambar`, 
							`deskripsi`
						FROM
							dplega_007_visualisasiusaha".$dumbTable." l
						WHERE
							l.noRegistrasi = '".$noreg."'
						ORDER BY idData DESC LIMIT 4
					) as tabel_temp ORDER By idData ASC
				";
				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$fetch = array(
										"idData"   			=> $row['idData'],
										"noreg"   			=> $row['noRegistrasi'],
										"urlGambar" 		=> $row['urlGambar'],
										"deskripsi" 		=> $row['deskripsi'],
							);

							array_push($vUsaha, $fetch);
							unset($fetch);
							$fetch = array();
						}
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}

				//hirarki
				$sql = 	"
					SELECT 
						l.`idData`, 
						l.`noRegistrasi`, 
						l.`hirarki`, 
						l.`noRegistrasiTarget`,
						CONCAT_WS(' ', j.`namaBentukLembaga`, k.`nama`) as nama
					FROM
						dplega_011_hirarkilembaga".$dumbTable." l
					JOIN
						dplega_000_lembaga".$dumbTable." k ON l.noRegistrasiTarget = k.noRegistrasi
					JOIN
						dplega_200_bentuklembaga j ON k.kodeBentukLembaga = j.kodeBentukLembaga
					WHERE
						l.noRegistrasi = '".$noreg."'
				";
				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$fetch = array(
										"idData"   		=> $row['idData'],
										"noreg"   		=> $row['noRegistrasi'],
										"hirarki" 		=> $row['hirarki'],
										"noregTarget" 	=> $row['noRegistrasiTarget'],
										"namaLembaga" 	=> $row['nama']
							);

							array_push($hirarki, $fetch);
							unset($fetch);
							$fetch = array();
						}
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}


				//koleki
				$sql = 	"
					SELECT 
						l.`idData`, 
						l.`noRegistrasi`, 
						l.`jenisKoleksi`, 
						l.`judulKoleksi`, 
						l.`deskripsi`
					FROM
						dplega_005_koleksi".$dumbTable." l
					WHERE
						l.noRegistrasi = '".$noreg."'
				";
				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$fetch = array(
										"idData"   		=> $row['idData'],
										"noreg"   		=> $row['noRegistrasi'],
										"jenisKoleksi" 	=> $row['jenisKoleksi'],
										"judulKoleksi" 	=> $row['judulKoleksi'],
										"deskripsi" 	=> $row['deskripsi']
							);

							array_push($koleksi, $fetch);
							unset($fetch);
							$fetch = array();
						}
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}

				//prestasi
				$sql = 	"
					SELECT 
						l.`idData`, 
						l.`noRegistrasi`, 
						l.`deskripsi`
					FROM
						dplega_006_prestasi".$dumbTable." l
					WHERE
						l.noRegistrasi = '".$noreg."'
				";
				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$fetch = array(
										"idData"   		=> $row['idData'],
										"noreg"   		=> $row['noRegistrasi'],
										"deskripsi" 	=> $row['deskripsi']
							);

							array_push($prestasi, $fetch);
							unset($fetch);
							$fetch = array();
						}
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}
				
			//end		
			}

			closeGate($gate);

			$record = array(
				"kelembagaan" 	=> $kelembagaan,
				"legalitas" 	=> $legalitas,
				"sejarah" 		=> $sejarah,
				"bantuan" 		=> $bantuan,
				"sarana" 		=> $sarana,
				"kepengurusan" 	=> $kepengurusan,
				"usaha" 		=> $usaha,
				"vUsaha" 		=> $vUsaha,
				"hirarki"		=> $hirarki,
				"koleksi"		=> $koleksi,
				"prestasi"		=> $prestasi
			);

			$resultList = array( "feedStatus" => "success", "feedMessage" => "Data ditemukan!", "feedData" => $record);
		}

		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $errorType, "feedMessage" => $errorMsg, "feedData" => array());
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function getVerifikasi($data){
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
		$dumbTable  = "";
		$noreg 		= $data['refferences'];

		/* open connection */ 
		$gate = openGate();
		if($gate){		
			// connection = true
			//checking section
			$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
			$result = mysqli_query($gate, $sql);
			if(mysqli_num_rows($result) > 0) {
				$dumbTable = "";
			}else{
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "_temp";
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
				}
			}


			$record    	= array(); 
			$fetch 	   	= array();  
			$lembaga  	= array();  
			$legalitas	= array();  
			$verifikasi	= array();  
			$statusValid= (($dumbTable == "") ? 'valid' : 'ajuan'); 

			if($error != 1){
				//kelembagaan
				$sql = 	"
					SELECT 
						l.`noRegistrasi`, 
						l.`nama`, 
						b.`namaBentukLembaga`, 
						l.`urlGambarLogo`,
						CONCAT_WS(' ', `alamat`, 'RT.',`noRt`, '/', 'RW.', `noRw`, `namaKelurahan`, `namaKecamatan`, `namaWilayah`, `namaProvinsi`) as alamat
					FROM
						dplega_000_lembaga".$dumbTable." l
					JOIN
						dplega_200_bentuklembaga b ON l.kodeBentukLembaga = b.kodeBentukLembaga
					LEFT JOIN
						dplega_100_provinsi p ON l.kodeProvinsi = p.idData
					LEFT JOIN
						dplega_101_wilayah w ON l.kodeWilayah = w.idData
					LEFT JOIN
						dplega_102_kecamatan kc ON l.kodeKecamatan = kc.idData
					LEFT JOIN
						dplega_103_kelurahan kl ON l.kodeKelurahan = kl.idData
					WHERE
						l.noRegistrasi = '".$noreg."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$lembaga = array(
									"noreg"   		=> $row['noRegistrasi'],
									"nama" 			=> $row['nama'],
									"bentukLembaga"	=> $row['namaBentukLembaga'],
									"alamat"		=> $row['alamat'],
									"picture"		=> $row['urlGambarLogo'],
									"statusValid"	=> $statusValid
							);
						}
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
				}	

				//legalitas
				$kodeBentukLembaga = mysqli_fetch_assoc(mysqli_query($gate, "SELECT kodeBentukLembaga FROM dplega_000_lembaga".$dumbTable." WHERE noRegistrasi = '".$noreg."'"));
				$kodeBentukLembaga = $kodeBentukLembaga['kodeBentukLembaga'];

				$sql = 	"
					SELECT 
						`kodePersyaratan`, 
						`namaPersyaratan`
					FROM
						dplega_201_persyaratan
					WHERE
						kodeBentukLembaga = '".$kodeBentukLembaga."'
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$sql = 	"
								SELECT 
									noLegalitas,
									tanggalLegalitas,
									urlFile,
									statusVerifikasi
								FROM
									dplega_009_legalitas".$dumbTable."
								WHERE
									kodePersyaratan = '".$row['kodePersyaratan']."'
								AND noRegistrasi = '".$noreg."'
							";

							$res = mysqli_query($gate, $sql);
							if($res){
								$sqlD = "SELECT l.`catatan` FROM dplega_013_verifikasilogs".$dumbTable." l WHERE l.noRegistrasi = '".$noreg."' AND l.kode = '".$row['kodePersyaratan']."' AND l.type = '0' ORDER BY idData DESC LIMIT 1";
								$resD = mysqli_fetch_assoc(mysqli_query($gate, $sqlD));
								$resD = (($resD != null) ? $resD['catatan'] : '');

								if(mysqli_num_rows($res) > 0) {
									// output data of each row 
									while($rowf = mysqli_fetch_assoc($res)) {
										$fetch = array (
											"noRegistrasi" 		=> $noreg,
											"kodePersyaratan" 	=> $row['kodePersyaratan'],
											"namaLegalitas" 	=> $row['namaPersyaratan'],
											"noLegalitas" 		=> $rowf['noLegalitas'],
											"tanggalLegalitas" 	=> $rowf['tanggalLegalitas'],
											"catatan" 			=> $resD,
											"statusVerifikasi" 	=> $rowf['statusVerifikasi'],
											"urlFile" 			=> $rowf['urlFile']
										);
									}
								}else{
									$fetch = array (
										"noRegistrasi" 		=> $noreg,
										"kodePersyaratan" 	=> $row['kodePersyaratan'],
										"namaLegalitas" 	=> $row['namaPersyaratan'],
										"noLegalitas" 		=> '',
										"tanggalLegalitas" 	=> '',
										"catatan" 			=> $resD,
										"statusVerifikasi" 	=> '0',
										"urlFile" 			=> ''
									);
								}
							}

							array_push($record, $fetch);
							unset($fetch);
							$fetch = array();
						}

						$legalitas = array(
									"noRegistrasi"   	=> $noreg,
									"items" 			=> $record
						);

						unset($record);
						$record = array();
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}


				//verifikasi
				$sql = 	"
					SELECT 
						v.`kodeVerifikasi`, 
						v.`namaVerifikasi`,
						v.`kodeGrupVerifikasi`,
						g.`namaGrupVerifikasi`
					FROM
						 dplega_221_verifikasi v
					JOIN dplega_220_grupverifikasi g ON v.kodeGrupVerifikasi = g.kodeGrupVerifikasi
					ORDER BY v.kodeGrupVerifikasi
				";

				$result = mysqli_query($gate, $sql);
				if($result){
					if(mysqli_num_rows($result) > 0) {
						// output data of each row 
						while($row = mysqli_fetch_assoc($result)) {
							$sql = 	"
								SELECT 
									idData,
									noRegistrasi,
									kodeVerifikasi,
									status
								FROM
									dplega_012_verifikasi".$dumbTable."
								WHERE
									kodeVerifikasi = '".$row['kodeVerifikasi']."'
								AND noRegistrasi = '".$noreg."'
							";

							$res = mysqli_query($gate, $sql);
							if($res){
								$sqlD = "SELECT l.`catatan` FROM dplega_013_verifikasilogs".$dumbTable." l WHERE l.noRegistrasi = '".$noreg."' AND l.kode = '".$row['kodeVerifikasi']."' AND l.type = '1' ORDER BY idData DESC LIMIT 1";
								$resD = mysqli_fetch_assoc(mysqli_query($gate, $sqlD));
								$resD = (($resD != null) ? $resD['catatan'] : '');

								if(mysqli_num_rows($res) > 0) {
									// output data of each row 
									while($rowf = mysqli_fetch_assoc($res)) {
										$fetch = array (
											"idData" 			=> $rowf['idData'],
											"noRegistrasi" 		=> $noreg,
											"kodeVerifikasi" 	=> $row['kodeVerifikasi'],
											"namaVerifikasi" 	=> $row['namaVerifikasi'],
											"statusVerifikasi" 	=> $rowf['status'],
											"catatan" 			=> $resD,
											"urlFile" 			=> ''
										);
									}
								}else{
									$fetch = array (
										"idData" 			=> '',
										"noRegistrasi" 		=> $noreg,
										"kodeVerifikasi" 	=> $row['kodeVerifikasi'],
										"namaVerifikasi" 	=> $row['namaVerifikasi'],
										"status" 			=> '0',
										"catatan" 			=> $resD,
										"urlFile" 			=> ''
									);
								}
							}

							array_push($record, $fetch);
							unset($fetch);
							$fetch = array();
						}

						$verifikasi = array(
									"noRegistrasi"   	=> $noreg,
									"items" 			=> $record
						);

						unset($record);
						$record = array();
					}
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke serverSS!";
				}

				
			//end		
			}

			closeGate($gate);

			$record = array(
				"kelembagaan" 	=> $lembaga,
				"legalitas" 	=> $legalitas,
				"verifikasi" 	=> $verifikasi,
			);

			$resultList = array( "feedStatus" => "success", "feedMessage" => "Data ditemukan!", "feedData" => $record);
		}

		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $errorType, "feedMessage" => $errorMsg, "feedData" => array());
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}
	
	function getKoleksiSection($data){
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
		$gate = openGate();
		if($gate){		
			// connection = true
			if($data['keyword'] ==''){
				$sql = 	
				"SELECT b.judulKoleksi, a.nama, c.namaBentukLembaga
				FROM dplega_005_koleksi_temp as b 
				JOIN  dplega_000_lembaga_temp as a ON b.noRegistrasi = a.noRegistrasi
				JOIN dplega_200_bentuklembaga as c	ON c.kodeBentukLembaga = a.kodeBentukLembaga";
			}else{
				$sql = 	
				"
				SELECT * FROM dplega_005_koleksi_temp WHERE noRegistrasi = '".$data['keyword']."'
				";
			}
						
			$result = mysqli_query($gate, $sql);
			if($result){
				$record    = array();  
				$fetch 	   = array(); 
				if(mysqli_num_rows($result) > 0) {
					// output data of each row 
					while($row = mysqli_fetch_assoc($result)) {
						if($data['keyword'] == ''){
							$fetch = array(
									"title"   		=> $row['judulKoleksi'],
									"group" 		=> $row['namaBentukLembaga'],
									"owner"		 	=> $row['nama']
								);
						}else{

						$fetch = array(
									"idData"   		=> $row['idData'],
									"noreg" 		=> $row['noRegistrasi'],
									"jenisKoleksi" 	=> $row['jenisKoleksi'],
									"judulKoleksi" 	=> $row['judulKoleksi'],
									"deskripsi"		=> $row['deskripsi']
								);
						}
						
						array_push($record, $fetch); 
						unset($fetch); 
						$fetch = array();
					}
					
					$resultList = array( "feedStatus" => "success", "feedMessage" => "Data ditemukan!", "feedData" => $record);
				}else {
					$resultList = array( "feedStatus" => "success", "feedMessage" => "Data tidak ditemukan!", "feedData" => null);
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

	function getPrestasiSection($data){
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
		$keyword	= "";
	
		/* open connection */ 
		$gate = openGate();
		if($gate){		
			// connection = true
			if(isset($data['keyword']) && $data['keyword'] != ""){ $keyword = "WHERE p.deskripsi like '%".$data['keyword']."%' OR l.nama like '%".$data['keyword']."%'"; }

			$sql = 
			"
				SELECT * FROM (
					SELECT 
						p.idData,
						p.noRegistrasi,
						l.nama,
						p.deskripsi,
						c.namaBentukLembaga
					FROM 
						 dplega_006_prestasi_temp p
					JOIN
						 dplega_000_lembaga_temp l ON p.noRegistrasi = l.noRegistrasi
					JOIN dplega_200_bentuklembaga as c	ON l.kodeBentukLembaga = c.kodeBentukLembaga
				".$keyword.") as tabel_1
				UNION
				SELECT * FROM (
					SELECT 
						p.idData,
						p.noRegistrasi,
						l.nama,
						p.deskripsi,
						c.namaBentukLembaga
					FROM 
						dplega_006_prestasi p
					JOIN
						 dplega_000_lembaga l ON 	p.noRegistrasi = l.noRegistrasi
					JOIN dplega_200_bentuklembaga as c	ON l.kodeBentukLembaga = c.kodeBentukLembaga
				".$keyword.") as tabel_2
			";
						
			$result = mysqli_query($gate, $sql);
			if($result){
				$record    = array();  
				$fetch 	   = array(); 
				if(mysqli_num_rows($result) > 0) {
					// output data of each row 
					while($row = mysqli_fetch_assoc($result)) {
						$fetch = array(
							"idData"   			=> $row['idData'],
							"noreg" 			=> $row['noRegistrasi'],
							"nama" 				=> $row['nama'],
							"namaBentukLembaga" => $row['namaBentukLembaga'],
							"deskripsi"			=> $row['deskripsi']
						);
				
						array_push($record, $fetch); 
						unset($fetch); 
						$fetch = array();
					}
					
					$resultList = array( "feedStatus" => "success", "feedMessage" => "Data ditemukan!", "feedData" => $record);
				}else {
					$resultList = array( "feedStatus" => "success", "feedMessage" => "Data tidak ditemukan!", "feedData" => null);
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

	function getKoleksi($data){
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
		$keyword	= "";
	
		/* open connection */ 
		$gate = openGate();
		if($gate){		
			// connection = true
			if($data['keyword'] !=''){
				$keyword = "WHERE b.judulKoleksi like '%".$data['keyword']."%'";
			}

			$sql = 	
			"	
				SELECT * FROM (
					SELECT 
						b.judulKoleksi, 
						a.nama, 
						c.namaBentukLembaga
					FROM dplega_005_koleksi_temp  as b 
					JOIN dplega_000_lembaga_temp  as a ON b.noRegistrasi = a.noRegistrasi
					JOIN dplega_200_bentuklembaga as c	ON c.kodeBentukLembaga = a.kodeBentukLembaga
					".$keyword."
				) as tabel_1
				UNION
				SELECT * FROM (
					SELECT 
						b.judulKoleksi, 
						a.nama, 
						c.namaBentukLembaga
					FROM dplega_005_koleksi  as b 
					JOIN dplega_000_lembaga  as a ON b.noRegistrasi = a.noRegistrasi
					JOIN dplega_200_bentuklembaga as c	ON c.kodeBentukLembaga = a.kodeBentukLembaga
					".$keyword."
				) as tabel_1
			";
						
			$result = mysqli_query($gate, $sql);
			if($result){
				$record    = array();  
				$fetch 	   = array(); 
				if(mysqli_num_rows($result) > 0) {
					// output data of each row 
					while($row = mysqli_fetch_assoc($result)) {
						if($data['keyword'] == ''){
							$fetch = array(
									"title"   		=> $row['judulKoleksi'],
									"group" 		=> $row['namaBentukLembaga'],
									"owner"		 	=> $row['nama']
								);
						}else{

						$fetch = array(
									"title"   		=> $row['judulKoleksi'],
									"group" 		=> $row['namaBentukLembaga'],
									"owner"		 	=> $row['nama']
								);
						}
						
						array_push($record, $fetch); 
						unset($fetch); 
						$fetch = array();
					}
					
					$resultList = array( "feedStatus" => "success", "feedMessage" => "Data ditemukan!", "feedData" => $record);
				}else {
					$resultList = array( "feedStatus" => "success", "feedMessage" => "Data tidak ditemukan!", "feedData" => null);
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

	function createKelembagaanSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		
		/* Validation */
		if( 
			   $data['nama'] == ""
			|| $data['alamat'] == ""
			|| $data['rt'] == "" || $data['rw'] == ""
			|| $data['kelurahan'] == "" || $data['kecamatan'] == "" || $data['wilayah'] == "" || $data['provinsi'] == ""
			|| $data['telp'] == ""
			|| $data['email'] == ""
			|| $data['bentukLembaga'] == ""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
				// connection = true
				$idTemp = $data["kodeAreaProvinsi"].$data["kodeAreaWilayah"].$data["kodeAreaKecamatan"];

				$sql =
				"
					SELECT noRegistrasi
					FROM dplega_000_lembaga_temp
					WHERE 
						noRegistrasi LIKE '".$data["kodeAreaProvinsi"].$data["kodeAreaWilayah"].$data["kodeAreaKecamatan"]."%'
					ORDER BY noRegistrasi DESC LIMIT 1
				";
				$query	= mysqli_query($gate, $sql);
				if(mysqli_num_rows($query) > 0){
					$result    = mysqli_fetch_assoc($query);
					$idTempB   = substr($result["noRegistrasi"],6,5);
					$idTempC   = $idTempB + 1;
					$str 	   = strlen($idTempC);
					switch ($str) {
						case 1:
							$idTemp = $idTemp.'0000'.$idTempC;
							break;
						case 2:
							$idTemp = $idTemp.'000'.$idTempC;
							break;
						case 3:
							$idTemp = $idTemp.'00'.$idTempC;
							break;
						case 4:
							$idTemp = $idTemp.'0'.$idTempC;
							break;
						default:
							$idTemp = $idTemp.$idTempC;
							break;
					}
				}else{
					$idTemp = $idTemp.'00001';
				}

				$sql = 
				"	INSERT INTO dplega_000_lembaga_temp
					(
						noRegistrasi,
						nama,
						alamat,
						noRt,
						noRw,
						kodeKelurahan,
						kodeKecamatan,
						kodeWilayah,
						kodeProvinsi,
						langitude,
						latitude,
						noTelp,
						email,
						mediaSosial,
						kodeBentukLembaga,
						kodeBidangGerak,
						jumlahPengurus,
						noNpwp,
						visiLembaga,
						misiLembaga,
						organisasiAfiliasi,
						catatanLain,
						createdBy, createdDate
					)
					VALUES
					(
						'".$idTemp."',
						'".$data['nama']."',
						'".$data['alamat']."',
						'".$data['rt']."',
						'".$data['rw']."',
						'".$data['kodeKelurahan']."',
						'".$data['kodeKecamatan']."',
						'".$data['kodeWilayah']."',
						'".$data['kodeProvinsi']."',
						'".$data['langitude']."',
						'".$data['latitude']."',
						'".$data['telp']."',
						'".$data['email']."',
						'".$data['medsos']."',
						'".$data['bentukLembaga']."',
						'".$data['bidangGerak']."',
						'".$data['jumlahPengurus']."',
						'".$data['npwp']."',
						'".$data['visi']."',
						'".$data['misi']."',
						'".$data['afiliasi']."',
						'".$data['catatan']."',
						'".$_SESSION['username']."', NOW()
					)
				";

				$result	  = mysqli_query($gate, $sql);
				if($result){	
					$error	    = 0;
					$resultType = "success";
					$resultMsg  = "Input berhasil disimpan. ";
					$imageStat	= 0;
					$file_name  = "";

					/*upload image*/
					if(isset($_FILES["imageUrl"])){
						$Validextensions = array("jpeg", "jpg", "png", "gif");
						$temporary = explode(".", $_FILES["imageUrl"]["name"]);
						$file_extension = end($temporary);
						$file_name = "berkas belum diunggah...";					
						if (in_array($file_extension, $Validextensions)) {						
							if ($_FILES["imageUrl"]["error"] > 0)
							{
								$upload_message = $_FILES["imageUrl"];
							}
							else
							{		
								$file_name = $idTemp."_logo.".$file_extension;			
								$sourcePath = $_FILES['imageUrl']['tmp_name']; // Storing source path of the file in a variable
								$targetPath = "img/logo/".$file_name; // Target path where file is to be stored
								if(move_uploaded_file($sourcePath,"../".$targetPath)){ /*Moving Uploaded file*/
									$sql = "UPDATE dplega_000_lembaga_temp SET urlGambarLogo = '".$file_name."'									
									WHERE noRegistrasi = '".$idTemp."'";			
									$result = mysqli_query($gate, $sql);	
									$imageStat = 1;
								}								
							}
						}
					}
					/*upload end*/

					/*create user*/
					$dumbQuery = "";
					$dumbValue = "";

					if($imageStat == 1 && $file_name != ""){
						$dumbQuery = "urlGambar,";
						$dumbValue = "'".$file_name."',";
					}

					$usernameTemp = strtolower(preg_replace('/\s+/', '', $idTemp.$data['nama']));
					if(strlen($usernameTemp) > 20){ $usernameTemp = substr($usernameTemp, 0, 19); }

					$sql = 
					"	INSERT INTO dplega_910_user
						(
							noRegistrasi,
							nama,
							jabatan,
							alamat,
							noRt,
							noRw,
							kodeKelurahan,
							kodeKecamatan,
							kodeWilayah,
							kodeProvinsi,
							noTelp,
							email,
							username,
							password,
							userLevel,
							statusActive,
							".$dumbQuery."
							createdBy, createdDate
						)
						VALUES
						(
							'".$idTemp."',
							'".$data['nama']."',
							'Penanggung jawab Lembaga',
							'".$data['alamat']."',
							'".$data['rt']."',
							'".$data['rw']."',
							'".$data['kodeKelurahan']."',
							'".$data['kodeKecamatan']."',
							'".$data['kodeWilayah']."',
							'".$data['kodeProvinsi']."',
							'".$data['telp']."',
							'".$data['email']."',
							'".$usernameTemp."',
							md5('jabarprov'),
							'1',
							'1',
							".$dumbValue."
							'".$_SESSION['username']."', NOW()
						)
					";

					$result	  = mysqli_query($gate, $sql);
					if($result){
						/* access list*/
						$sql = 
						"	INSERT INTO dplega_911_useraccess
							(
								username,
								idApps,
								module,
								lihat,
								tambah,
								ubah,
								hapus,
								createdBy, createdDate
							)
							VALUES
							(
								'".$usernameTemp."',
								'1',
								'kelembagaan',
								'1',
								'0',
								'1',
								'0',
								'TESTSESSION', NOW()
							);
						";

						$result	  = mysqli_query($gate, $sql);
						if(!$result){
							//error state
							$error		= 0;
							$resultType = "warning";
							$resultMsg	= "Berhasil menyimpan data lembaga dan membuat akun, gagal menyimpan acces-list";
						}
					}else{
						//error state
						$error		= 0;
						$resultType = "warning";
						$resultMsg	= "Success menyimpan data lembaga, gagal membuat akun!";
					}
					/*create end*/
					
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $file_name, "feedPId" => $idTemp);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}


	// LEGLITAS =============
	function createLegalitasSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg 		= $data['noreg'];
		$file_name	= "";
		$nama 		= "";
		$states		= "";

		/* Validation */
		if( 
			   $data['noreg'] == ""
			|| $data['nomorLegalitas'] == ""
			|| $data['tanggalLegalitas'] == ""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
				// connection = true
				//checking lembaga exist
				$sql 	= " SELECT noRegistrasi, nama FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
					while($row = mysqli_fetch_assoc($result)) { $nama = $row['nama']; }
				}else{
					$sql 	= " SELECT noRegistrasi, nama FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
						while($row = mysqli_fetch_assoc($result)) { $nama = $row['nama']; }
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql 	= "
								SELECT noRegistrasi FROM dplega_009_legalitas".$dumbTable." 
								WHERE noRegistrasi = '".$noreg."' AND kodePersyaratan = '".$data['kodePersyaratan']."'";
					
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$sql = 
						"	UPDATE dplega_009_legalitas".$dumbTable."
							SET
								kodePersyaratan 	= '".$data['kodePersyaratan']."',
								noLegalitas 		= '".$data['nomorLegalitas']."',
								tanggalLegalitas 	= '".$data['tanggalLegalitas']."',
								statusVerifikasi	= '0',
								changedBy 	  		= '".$_SESSION['username']."',
								changedDate   		= NOW()
							WHERE
								noRegistrasi 		= '".$noreg."' 
							AND kodePersyaratan 	= '".$data['kodePersyaratan']."'";
					
							$states = "diubah";
					}else{
						$sql = 
						"	INSERT INTO dplega_009_legalitas".$dumbTable."
							(
								noRegistrasi,
								kodePersyaratan,
								noLegalitas,
								tanggalLegalitas,
								statusVerifikasi,
								createdBy, createdDate
							)
							VALUES
							(
								'".$noreg."',
								'".$data['kodePersyaratan']."',
								'".$data['nomorLegalitas']."',
								'".$data['tanggalLegalitas']."',
								'0',
								'".$_SESSION['username']."', NOW()
							)
						";

						$states = "ditambahkan";
					}

					$result	  = mysqli_query($gate, $sql);
					$eresult  = mysqli_error($gate);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "Input berhasil disimpan. ";
						$file_name = ((isset($data['imageTemp'])) ? $data['imageTemp'] : "berkas belum diunggah...");
						if(isset($data['fileState']) && $data['fileState'] == "remove"){
							$sql 	= "
								SELECT urlFile FROM dplega_009_legalitas".$dumbTable." 
								WHERE noRegistrasi = '".$noreg."' AND kodePersyaratan = '".$data['kodePersyaratan']."'";
					
								$result = mysqli_query($gate, $sql);
								if(mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
										if(file_exists("../img/legalitas/".$row['urlFile'])){
											unlink("../img/legalitas/".$row['urlFile']);
										}
									}
								}

								$file_name = "berkas belum diunggah...";
								$sql = "
										UPDATE dplega_009_legalitas".$dumbTable." SET urlFile = '' 
										WHERE noRegistrasi = '".$noreg."' AND kodePersyaratan = '".$data['kodePersyaratan']."'";			
								$result = mysqli_query($gate, $sql);

						}else{
							if(isset($_FILES["imageUrl"]["name"]) && $_FILES["imageUrl"]["name"] != ""){
								/*upload image*/
								$Validextensions = array("jpeg", "jpg", "png", "gif");
								$temporary = explode(".", $_FILES["imageUrl"]["name"]);
								$file_extension = end($temporary);
								$file_name = "berkas belum diunggah...";
								if (in_array($file_extension, $Validextensions)) {						
									if ($_FILES["imageUrl"]["error"] > 0)
									{
										$upload_message = $_FILES["imageUrl"];
									}
									else
									{					
										$file_name = $noreg."_".$data['kodePersyaratan']."_legalitas.".$file_extension;		
										$sourcePath = $_FILES['imageUrl']['tmp_name']; // Storing source path of the file in a variable
										$targetPath = "img/legalitas/".$file_name; // Target path where file is to be stored
										if(move_uploaded_file($sourcePath,"../".$targetPath)){ /*Moving Uploaded file*/
											$sql = "
													UPDATE dplega_009_legalitas".$dumbTable." SET urlFile = '".$file_name."' 
													WHERE noRegistrasi = '".$noreg."' AND kodePersyaratan = '".$data['kodePersyaratan']."'";			
											$result = mysqli_query($gate, $sql);									
										}								
									}
								}
							}
							/*upload end*/
						}

						if($states == "diubah"){
							$sql = 
							"	UPDATE dplega_000_lembaga".$dumbTable. "
								SET statusAktif = '2'
								WHERE
									noRegistrasi = '".$noreg."'
							";

							mysqli_query($gate, $sql);

							$post['refferenceId'] = $noreg;
							$post['dataFetch'] ='0';
							if($dumbTable != "_temp"){ $post['dataFetch'] == '1'; }
							moveLembaga($target, $post);
						}
							

						/*add notif*/
						$namaPersyaratan = "";
						$sql 	= " SELECT namaPersyaratan FROM dplega_201_persyaratan WHERE kodePersyaratan = '".$data['kodePersyaratan']."'";
						$result = mysqli_query($gate, $sql);
						if(mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) { $namaPersyaratan = $row['namaPersyaratan']; }
						}
						
						$sql = 
						"	INSERT INTO dplega_901_notifications
							(
								deskripsi,
								waktu,
								targetUser,
								createdBy, createdDate
							)
							VALUES
							(
								'Legalitas (".$namaPersyaratan.") ".$nama." telah ".$states." oleh ".$_SESSION["nama"]."',
								NOW(),
								'".$noreg."',
								'".$_SESSION["username"]."',NOW()
							)
						";

						$result	  = mysqli_query($gate, $sql);
						/*end notif*/
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $file_name);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}
	
	function legalitasByNoreg($data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$record    		= array(); 
		$fetch 	   		= array();
		$legalitas 	   	= array();

		$dumbTable  = "";
		$noreg 		= $data['refferences'];

		/* open connection */ 
		$gate = openGate();
		if($gate){		
			// connection = true
			//checking section
			$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
			$result = mysqli_query($gate, $sql);
			if(mysqli_num_rows($result) > 0) {
				$dumbTable = "";
			}else{
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "_temp";
				}else{
					//error state
					$error		= 1;
					$errorType  = "danger";
					$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
				}
			}


			//legalitas
			$kodeBentukLembaga = mysqli_fetch_assoc(mysqli_query($gate, "SELECT kodeBentukLembaga FROM dplega_000_lembaga".$dumbTable." WHERE noRegistrasi = '".$noreg."'"));
			$kodeBentukLembaga = $kodeBentukLembaga['kodeBentukLembaga'];

			$sql = 	"
				SELECT 
					`kodePersyaratan`, 
					`namaPersyaratan`
				FROM
					dplega_201_persyaratan
				WHERE
					kodeBentukLembaga = '".$kodeBentukLembaga."'
			";

			$result = mysqli_query($gate, $sql);
			if($result){
				if(mysqli_num_rows($result) > 0) {
					// output data of each row 
					while($row = mysqli_fetch_assoc($result)) {
						$sql = 	"
							SELECT 
								noLegalitas,
								tanggalLegalitas,
								urlFile
							FROM
								dplega_009_legalitas".$dumbTable."
							WHERE
								kodePersyaratan = '".$row['kodePersyaratan']."'
							AND noRegistrasi = '".$noreg."'
						";

						$res = mysqli_query($gate, $sql);
						if($res){
							if(mysqli_num_rows($res) > 0) {
								// output data of each row 
								while($rowf = mysqli_fetch_assoc($res)) {
									$fetch = array (
										"noRegistrasi" 		=> $noreg,
										"kodePersyaratan" 	=> $row['kodePersyaratan'],
										"namaLegalitas" 	=> $row['namaPersyaratan'],
										"noLegalitas" 		=> $rowf['noLegalitas'],
										"tanggalLegalitas" 	=> $rowf['tanggalLegalitas'],
										"urlFile" 			=> $rowf['urlFile']
									);
								}
							}else{
								$fetch = array (
									"noRegistrasi" 		=> $noreg,
									"kodePersyaratan" 	=> $row['kodePersyaratan'],
									"namaLegalitas" 	=> $row['namaPersyaratan'],
									"noLegalitas" 		=> '',
									"tanggalLegalitas" 	=> '',
									"urlFile" 			=> ''
								);
							}
						}

						array_push($record, $fetch);
						unset($fetch);
						$fetch = array();
					}

					$legalitas = array(
								"noRegistrasi"   	=> $noreg,
								"items" 			=> $record
					);

					unset($record);
					$record = array();

					closeGate($gate);

					$resultList = array( "feedStatus" => "success", "feedMessage" => "Data ditemukan!", "feedData" => $legalitas);
				}
			}else{
				//error state
				$error		= 1;
				$errorType  = "danger";
				$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
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

	function legalitasByBentukLembaga($data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$record    		= array(); 
		$fetch 	   		= array();
		$legalitas 	   	= array();

		$kodeBentukLembaga 	= $data['refferences'];

		/* open connection */ 
		$gate = openGate();
		if($gate){		
			// connection = true
			$sql = 	"
				SELECT 
					`kodePersyaratan`, 
					`namaPersyaratan`
				FROM
					dplega_201_persyaratan
				WHERE
					kodeBentukLembaga = '".$kodeBentukLembaga."'
			";

			$result = mysqli_query($gate, $sql);
			if($result){
				if(mysqli_num_rows($result) > 0) {
					// output data of each row 
					while($row = mysqli_fetch_assoc($result)) {
						$fetch = array (
							"noRegistrasi" 		=> '',
							"kodePersyaratan" 	=> $row['kodePersyaratan'],
							"namaLegalitas" 	=> $row['namaPersyaratan'],
							"noLegalitas" 		=> '',
							"tanggalLegalitas" 	=> '',
							"urlFile" 			=> ''
						);

						array_push($record, $fetch);
						unset($fetch);
						$fetch = array();
					}

					$legalitas = array(
								"noRegistrasi"   	=> '',
								"items" 			=> $record
					);

					unset($record);
					$record = array();

					closeGate($gate);

					$resultList = array( "feedStatus" => "success", "feedMessage" => "Data ditemukan!", "feedData" => $legalitas);
				}
			}else{
				//error state
				$error		= 1;
				$errorType  = "danger";
				$errorMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
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


	//SEJARAH ===========================
	function createSejarahBantuanSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$noreg		= "";
		$dumbTable  = "";
		
		/* Validation */
		if( 
			   $data['noreg'] == ""
			|| $data['bantuanDari'] == ""
			|| $data['tahun'] == ""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
				// connection = true
				$noreg = $data['noreg'];
				
				//checking section
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				$sql = 
				"	INSERT INTO dplega_010_riwayatbantuan".$dumbTable."
					(
						noRegistrasi,
						tahun,
						dibantuOleh,
						deskripsi,
						createdBy, createdDate
					)
					VALUES
					(
						'".$noreg."',
						'".$data['tahun']."',
						'".$data['bantuanDari']."',
						'".$data['deskripsi']."',
						'".$_SESSION['username']."', NOW()
					)
				";

				$result	  = mysqli_query($gate, $sql);
				$idRecent = mysqli_insert_id($gate);
				//$result = true;
				if($result){	
					$error	    = 0;
					$resultType = "success";
					$resultMsg  = "Input berhasil disimpan.";

				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan!";
				}

				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $idRecent);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function changeKelembagaanSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		$file_name	= "";
		
		if( 
			   $data['noreg'] == ""
			|| $data['nama'] == ""
			|| $data['alamat'] == ""
			|| $data['rt'] == "" || $data['rw'] == ""
			|| $data['kelurahan'] == "" || $data['kecamatan'] == "" || $data['wilayah'] == "" || $data['provinsi'] == ""
			|| $data['telp'] == ""
			|| $data['email'] == ""
			|| $data['bentukLembaga'] == ""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section
				$noreg	= $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				$sql = 
				"	UPDATE dplega_000_lembaga".$dumbTable."
					SET
						nama 				= '".$data['nama']."',
						alamat 				= '".$data['alamat']."',
						noRt 				= '".$data['rt']."',
						noRw 				= '".$data['rw']."',
						langitude 			= '".$data['langitude']."',
						latitude 			= '".$data['latitude']."',
						noTelp 				= '".$data['telp']."',
						email 				= '".$data['email']."',
						mediaSosial 		= '".$data['medsos']."',
						kodeBentukLembaga 	= '".$data['bentukLembaga']."',
						kodeBidangGerak 	= '".$data['bidangGerak']."',
						jumlahPengurus 		= '".$data['jumlahPengurus']."',
						noNpwp 				= '".$data['npwp']."',
						visiLembaga 		= '".$data['visi']."',
						misiLembaga 		= '".$data['misi']."',
						organisasiAfiliasi 	= '".$data['afiliasi']."',
						catatanLain 		= '".$data['catatan']."',
						changedBy 			= '".$_SESSION['username']."',
						changedDate			= NOW()
					
					WHERE
						noRegistrasi = '".$data['noreg']."'
				";
				$result	  = mysqli_query($gate, $sql);
				if($result){	
					$error	    = 0;
					$resultType = "success";
					$resultMsg  = "data berhasil diubah.";

					if(isset($data['fileState']) && $data['fileState'] == "remove"){
						$sql 	= "
							SELECT urlGambarLogo FROM dplega_000_lembaga".$dumbTable." 
							WHERE noRegistrasi = '".$noreg."'";
				
							$result = mysqli_query($gate, $sql);
							if(mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
									if(file_exists("../img/logo/".$row['urlGambarLogo'])){
										unlink("../img/logo/".$row['urlGambarLogo']);
									}
								}
							}

							$file_name = "berkas belum diunggah...";
							$sql = "
									UPDATE dplega_000_lembaga".$dumbTable." SET urlGambarLogo = '' 
									WHERE noRegistrasi = '".$noreg."'";			
							$result = mysqli_query($gate, $sql);

					}else{
					/*upload image*/
						$Validextensions = array("jpeg", "jpg", "png", "gif");
						$temporary = explode(".", $_FILES["imageUrl"]["name"]);
						$file_extension = end($temporary);
						$file_name = "berkas belum diunggah...";				
						if (in_array($file_extension, $Validextensions)) {						
							if ($_FILES["imageUrl"]["error"] > 0)
							{
								$upload_message = $_FILES["imageUrl"];
							}
							else
							{		
								$file_name = $data['noreg']."_logo.".$file_extension;				
								$sourcePath = $_FILES['imageUrl']['tmp_name']; // Storing source path of the file in a variable
								$targetPath = "img/logo/".$file_name; // Target path where file is to be stored
								if(move_uploaded_file($sourcePath,"../".$targetPath)){ /*Moving Uploaded file*/
									$sql = "UPDATE dplega_000_lembaga_temp SET urlGambarLogo = '".$file_name."' WHERE noRegistrasi = '".$data['noreg']."'";			
									$result = mysqli_query($gate, $sql);									
								}								
							}
						}
						/*upload end*/
					}

					/*add notif*/
					$sql = 
					"	INSERT INTO dplega_901_notifications
						(
							deskripsi,
							waktu,
							targetUser,
							createdBy, createdDate
						)
						VALUES
						(
							'Data ".$data['nama']." telah diubah oleh ".$_SESSION["nama"]."',
							NOW(),
							'".$noreg."',
							'".$_SESSION["username"]."',NOW()
						)
					";

					$result	  = mysqli_query($gate, $sql);
					/*end notif*/
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, data gagal diubah!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}

		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan atau data tidak lengkap!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $file_name, "feedPId" => $noreg);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function createSejarahSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$noreg		= "";
		$dumbTable  = "";
		$file_name  = "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']==""
		){ $error = 1; }

		if($error != 1){
		/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true

				$noreg = $data['noreg'];

				//checking section
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				$sql   = " 
					INSERT INTO dplega_001_sejarah".$dumbTable."
					(
						noRegistrasi,
						deskripsi,
						tanggalDidirikan,
						kepemilikan,
						statusTanah,
						statusSertifikasi,
						luasTanah,
						satuanLuasTanah,
						luasBangunan,
						SatuanLuasBangunan,
						statusStrukturKepengurusan,
						kondisiBangunan,
						jumlahBangunan,
						statusSarana,
						bahasaPengantar,
						statusSensus,
						statusBantuanPemerintah,
						kondisiGeografis,
						potensiWilayah,
						jenisWilayah,
						catatanLain,
						createdBy, createdDate
					)
					VALUES
					(
						'".$data['noreg']."',
						'".$data['sejarah']."',
						'".$data['tanggalBerdiri']."',
						'".$data['kepemilikan']."',
						'".$data['statusTanah']."',
						'".$data['sertifikasi']."',
						'".$data['luasTanah']."',
						'".$data['satuanT']."',
						'".$data['luasBangun']."',
						'".$data['satuanB']."',
						'Tidak Ada',
						'".$data['kondisiBangunan']."',
						'".$data['jumlahBangunan']."',
						'".$data['saranaPrasarana']."',
						'".$data['bahasa']."',
						'".$data['sensus']."',
						'".$data['bantuan']."',
						'".$data['kondisiGeo']."',
						'".$data['potensi']."',
						'".$data['jenisWilayah']."',
						'".$data['catatan']."',
						'".$_SESSION['username']."', NOW()
					)
				";

				$result	  = mysqli_query($gate, $sql);
				$eresult  = mysqli_error($gate);
				$idTemp   = mysqli_insert_id($gate);
				if($result){	
					$error	    = 0;
					$resultType = "success";
					$resultMsg  = "Input berhasil disimpan.";

					if(isset($data['fileState']) && $data['fileState'] == "remove"){
						$sql 	= "
							SELECT urlGambarStrukturKepengurusan as urlFile FROM dplega_001_sejarah".$dumbTable." 
							WHERE noRegistrasi = '".$noreg."'";
				
							$result = mysqli_query($gate, $sql);
							if(mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
									if(file_exists("../img/strukturOrganisasi/".$row['urlFile'])){
										unlink("../img/strukturOrganisasi/".$row['urlFile']);
									}
								}
							}

							$file_name = "berkas belum diunggah...";

							$sql = "
									UPDATE dplega_001_sejarah".$dumbTable." SET 
										statusStrukturKepengurusan = 'Tidak Ada', 
										urlGambarStrukturKepengurusan = '' 
									WHERE noRegistrasi = '".$noreg."'";			
							$result = mysqli_query($gate, $sql);

						}else{
							/*upload image*/
							$Validextensions = array("jpeg", "jpg", "png", "gif");
							$temporary = explode(".", $_FILES["imageUrl"]["name"]);
							$file_extension = end($temporary);
							$file_name = "berkas belum diunggah...";				
							if (in_array($file_extension, $Validextensions)) {						
								if ($_FILES["imageUrl"]["error"] > 0)
								{
									$upload_message = $_FILES["imageUrl"];
								}
								else
								{			
									$file_name = $data['noreg']."_sOrganisasi.".$file_extension;			
									$sourcePath = $_FILES['imageUrl']['tmp_name']; // Storing source path of the file in a variable
									$targetPath = "img/strukturOrganisasi/".$file_name; // Target path where file is to be stored
									if(move_uploaded_file($sourcePath,"../".$targetPath)){ /*Moving Uploaded file*/
										$sql = "UPDATE dplega_001_sejarah".$dumbTable." SET 
													statusStrukturKepengurusan 		= 'Ada',
													urlGambarStrukturKepengurusan 	= '".$file_name."' 
												WHERE 
													noRegistrasi = '".$noreg."'";

										$result = mysqli_query($gate, $sql);									
									}								
								}
							}
							/*upload end*/		
						}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan! ";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $file_name);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function changeSejarahSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$noreg		= "";
		$dumbTable  = "";
		$file_name  = "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']==""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
				// connection = true
				//checking section
				$noreg  = $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				$sql 	= " SELECT noRegistrasi FROM dplega_001_sejarah".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$sql ="
						UPDATE dplega_001_sejarah".$dumbTable."
						SET
							deskripsi 						= '".$data['sejarah']."',
							tanggalDidirikan 				= '".$data['tanggalBerdiri']."',
							kepemilikan 					= '".$data['kepemilikan']."',
							statusTanah 					= '".$data['statusTanah']."',
							statusSertifikasi 				= '".$data['sertifikasi']."',
							luasTanah 						= '".$data['luasTanah']."',
							satuanLuasTanah 				= '".$data['satuanT']."',
							luasBangunan 					= '".$data['luasBangun']."',
							SatuanLuasBangunan 				= '".$data['satuanB']."',
							kondisiBangunan 				= '".$data['kondisiBangunan']."',
							jumlahBangunan 					= '".$data['jumlahBangunan']."',
							statusSarana 					= '".$data['saranaPrasarana']."',
							bahasaPengantar 				= '".$data['bahasa']."',
							statusSensus 					= '".$data['sensus']."',
							statusBantuanPemerintah 		= '".$data['bantuan']."',
							kondisiGeografis				= '".$data['kondisiGeo']."',
							potensiWilayah 					= '".$data['potensi']."',
							jenisWilayah 					= '".$data['jenisWilayah']."',
							catatanLain 					= '".$data['catatan']."',
							changedBy 						= '".$_SESSION['username']."',
							changedDate						= NOW()
						WHERE
							noRegistrasi = '".$noreg."'
					";

				}else{
					$sql   = " 
						INSERT INTO dplega_001_sejarah".$dumbTable."
						(
							noRegistrasi,
							deskripsi,
							tanggalDidirikan,
							kepemilikan,
							statusTanah,
							statusSertifikasi,
							luasTanah,
							satuanLuasTanah,
							luasBangunan,
							SatuanLuasBangunan,
							statusStrukturKepengurusan,
							kondisiBangunan,
							jumlahBangunan,
							statusSarana,
							bahasaPengantar,
							statusSensus,
							statusBantuanPemerintah,
							kondisiGeografis,
							potensiWilayah,
							jenisWilayah,
							catatanLain,
							createdBy, createdDate
						)
						VALUES
						(
							'".$data['noreg']."',
							'".$data['sejarah']."',
							'".$data['tanggalBerdiri']."',
							'".$data['kepemilikan']."',
							'".$data['statusTanah']."',
							'".$data['sertifikasi']."',
							'".$data['luasTanah']."',
							'".$data['satuanT']."',
							'".$data['luasBangun']."',
							'".$data['satuanB']."',
							'Tidak Ada',
							'".$data['kondisiBangunan']."',
							'".$data['jumlahBangunan']."',
							'".$data['saranaPrasarana']."',
							'".$data['bahasa']."',
							'".$data['sensus']."',
							'".$data['bantuan']."',
							'".$data['kondisiGeo']."',
							'".$data['potensi']."',
							'".$data['jenisWilayah']."',
							'".$data['catatan']."',
							'".$_SESSION['username']."', NOW()
						)
					";
				}

				$result	  = mysqli_query($gate, $sql);
				if($result){	
					$error	    = 0;
					$resultType = "success";
					$resultMsg  = "data berhasil diubah.";

					if(isset($data['fileState']) && $data['fileState'] == "remove"){
						$sql 	= "
							SELECT urlGambarStrukturKepengurusan as urlFile FROM dplega_001_sejarah".$dumbTable." 
							WHERE noRegistrasi = '".$noreg."'";
			
						$result = mysqli_query($gate, $sql);
						if(mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								if(file_exists("../img/strukturOrganisasi/".$row['urlFile'])){
									unlink("../img/strukturOrganisasi/".$row['urlFile']);
								}
							}
						}

						$file_name = "berkas belum diunggah...";

						$sql = "
								UPDATE dplega_001_sejarah".$dumbTable." SET 
									statusStrukturKepengurusan = 'Tidak Ada', 
									urlGambarStrukturKepengurusan = '' 
								WHERE noRegistrasi = '".$noreg."'";			
						$result = mysqli_query($gate, $sql);

					}else{
						/*upload image*/
						$Validextensions = array("jpeg", "jpg", "png", "gif");
						$temporary = explode(".", $_FILES["imageUrl"]["name"]);
						$file_extension = end($temporary);
						$file_name = "berkas belum diunggah...";					
						if (in_array($file_extension, $Validextensions)) {						
							if ($_FILES["imageUrl"]["error"] > 0)
							{
								$upload_message = $_FILES["imageUrl"];
							}
							else
							{					
								$file_name = $data['noreg']."_sOrganisasi.".$file_extension;
								$sourcePath = $_FILES['imageUrl']['tmp_name']; // Storing source path of the file in a variable
								$targetPath = "img/strukturOrganisasi/".$file_name; // Target path where file is to be stored
								if(move_uploaded_file($sourcePath,"../".$targetPath)){ /*Moving Uploaded file*/
									$sql = "UPDATE dplega_001_sejarah".$dumbTable." SET 
												statusStrukturKepengurusan 		= 'Ada',
												urlGambarStrukturKepengurusan 	= '".$file_name."' 
											WHERE 
												noRegistrasi = '".$noreg."'";

									$result = mysqli_query($gate, $sql);									
								}								
							}
						}
						/*upload end*/		
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, data gagal diubah!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan atau data tidak lengkap!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $file_name);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function changeSaranaSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$noreg		= "";
		$dumbTable  = "";
		$file_name  = "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']==""||
			!isset($data['keterangan']) || $data['keterangan']==""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
				// connection = true
				//checking section
				$noreg  = $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				$sql ="
					UPDATE dplega_008_visualisasisarana".$dumbTable."
					SET
						deskripsi 						= '".$data['keterangan']."',
						changedBy 						= '".$_SESSION['username']."',
						changedDate						= NOW()
					WHERE
						noRegistrasi = '".$noreg."'
					AND idData = '".$data['p-id']."'
				";

				$result	  = mysqli_query($gate, $sql);
				$eresult  = mysqli_error($gate);
				if($result){	
					$error	    = 0;
					$resultType = "success";
					$resultMsg  = "data berhasil diubah.";

					if(isset($data['fileState']) && $data['fileState'] == "remove"){
						$sql 	= "
							SELECT urlGambar as urlFile FROM dplega_008_visualisasisarana".$dumbTable." 
							WHERE noRegistrasi = '".$noreg."' AND idData = '".$data['p-id']."'";
			
						$result = mysqli_query($gate, $sql);
						if(mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								if(file_exists("../img/saranaPrasarana/".$row['urlFile'])){
									unlink("../img/saranaPrasarana/".$row['urlFile']);
								}
							}
						}

						$file_name = "berkas belum diunggah...";

						$sql = "
								UPDATE dplega_008_visualisasisarana".$dumbTable." SET 
									urlGambar = '' 
								WHERE noRegistrasi = '".$noreg."' AND idData = '".$data['p-id']."'";			
						$result = mysqli_query($gate, $sql);

					}else{
						/*upload image*/
						$Validextensions = array("jpeg", "jpg", "png", "gif");
						$temporary = explode(".", $_FILES["imageUrl"]["name"]);
						$file_extension = end($temporary);
						$file_name = "berkas belum diunggah...";					
						if (in_array($file_extension, $Validextensions)) {						
							if ($_FILES["imageUrl"]["error"] > 0)
							{
								$upload_message = $_FILES["imageUrl"];
							}
							else
							{			
								$file_name = $data['noreg']."_".$data['p-id']."_sarana.".$file_extension;		
								$sourcePath = $_FILES['imageUrl']['tmp_name']; // Storing source path of the file in a variable
								$targetPath = "img/saranaPrasarana/".$file_name; // Target path where file is to be stored
								if(move_uploaded_file($sourcePath,"../".$targetPath)){ /*Moving Uploaded file*/
									$sql = "UPDATE dplega_008_visualisasisarana".$dumbTable." SET 
												urlGambar 	= '".$file_name."' 
											WHERE 
												 noRegistrasi = '".$noreg."'
											 AND idData = '".$data['p-id']."'";

									$result = mysqli_query($gate, $sql);									
								}								
							}
						}
						/*upload end*/		
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, data gagal diubah!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $file_name, "feedPId" => $data['p-id']);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function changeVisualisasiUsahaSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$noreg		= "";
		$dumbTable  = "";
		$file_name  = "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']=="" ||
			!isset($data['keterangan']) || $data['keterangan']==""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
				// connection = true
				//checking section
				$noreg  = $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				$sql ="
					UPDATE dplega_007_visualisasiusaha".$dumbTable."
					SET
						deskripsi 						= '".$data['keterangan']."',
						changedBy 						= '".$_SESSION['username']."',
						changedDate						= NOW()
					WHERE
						noRegistrasi = '".$noreg."'
					AND idData = '".$data['p-id']."'
				";

				$result	  = mysqli_query($gate, $sql);
				$eresult  = mysqli_error($gate);
				if($result){	
					$error	    = 0;
					$resultType = "success";
					$resultMsg  = "data berhasil diubah.";

					if(isset($data['fileState']) && $data['fileState'] == "remove"){
						$sql 	= "
							SELECT urlGambar as urlFile FROM dplega_007_visualisasiusaha".$dumbTable." 
							WHERE noRegistrasi = '".$noreg."' AND idData = '".$data['p-id']."'";
			
						$result = mysqli_query($gate, $sql);
						if(mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								if(file_exists("../img/usaha/".$row['urlFile'])){
									unlink("../img/usaha/".$row['urlFile']);
								}
							}
						}

						$file_name = "berkas belum diunggah...";

						$sql = "
								UPDATE dplega_007_visualisasiusaha".$dumbTable." SET 
									urlGambar = '' 
								WHERE noRegistrasi = '".$noreg."' AND idData = '".$data['p-id']."'";			
						$result = mysqli_query($gate, $sql);

					}else{
						/*upload image*/
						$Validextensions = array("jpeg", "jpg", "png", "gif");
						$temporary = explode(".", $_FILES["imageUrl"]["name"]);
						$file_extension = end($temporary);
						$file_name = "berkas belum diunggah...";				
						if (in_array($file_extension, $Validextensions)) {						
							if ($_FILES["imageUrl"]["error"] > 0)
							{
								$upload_message = $_FILES["imageUrl"];
							}
							else
							{					
								$file_name = $data['noreg']."_".$data['p-id']."_usaha.".$file_extension;	
								$sourcePath = $_FILES['imageUrl']['tmp_name']; // Storing source path of the file in a variable
								$targetPath = "img/usaha/".$file_name; // Target path where file is to be stored
								if(move_uploaded_file($sourcePath,"../".$targetPath)){ /*Moving Uploaded file*/
									$sql = "UPDATE dplega_007_visualisasiusaha".$dumbTable." SET 
												urlGambar 	= '".$file_name."' 
											WHERE 
												 noRegistrasi = '".$noreg."'
											 AND idData = '".$data['p-id']."'";

									$result = mysqli_query($gate, $sql);									
								}								
							}
						}
						/*upload end*/		
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, data gagal diubah!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $file_name, "feedPId" => $data['p-id']);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function transferLembaga($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$noreg		= "";
		$dumbTable  = "";
		$regDumb  	= "";
		
		/* Validation */
		if(!isset($data['noreg']) || $data['noreg']==""){ 
			$error = 1; 
			$resultType = "danger";
			$resultMsg	= "Pilih lembaga yang akan di transfer !";
		}

		if(
			   !isset($data['kodeProvinsi'])  || $data['kodeProvinsi'] =="" 
			|| !isset($data['kodeWilayah'])   || $data['kodeWilayah']  =="" 
			|| !isset($data['kodeKecamatan']) || $data['kodeKecamatan']=="" 
			|| !isset($data['kodeKelurahan']) || $data['kodeKelurahan']=="" 
		){ 
			$error = 1; 
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
				// connection = true
				$sql ="
					UPDATE dplega_000_lembaga_temp
					SET
						kodeProvinsi	= '".$data['kodeProvinsi']."',
						kodeWilayah		= '".$data['kodeWilayah']."',
						kodeKecamatan	= '".$data['kodeKecamatan']."',
						kodeKelurahan	= '".$data['kodeKelurahan']."',
						changedBy 		= '".$_SESSION['username']."',
						changedDate		= NOW()
					WHERE
						noRegistrasi IN (";

				$noreg  = explode(',', $data['noreg']);
				$total  = count($noreg);
				$counter= 1;
				foreach ($noreg as $value) {
					if($counter == $total) {
						$regDumb = $regDumb.$value;
						$sql = $sql."'".$value."'";
					}else{  
						$regDumb = $regDumb.$value.",";
						$sql = $sql."'".$value."',";
					}

					$counter++;
				}

				$sql = $sql.")";

				$result	  = mysqli_query($gate, $sql);
				$eresult  = mysqli_error($gate);
				if($result){	
					$error	    = 0;
					$resultType = "success";
					$resultMsg  = "data lembaga berhasil ditransfer.";

					/*add notif*/
					$sql = 
					"	INSERT INTO dplega_901_notifications
						(
							deskripsi,
							waktu,
							targetUser,
							createdBy, createdDate
						)
						VALUES
						(
							'Data dengan no registrasi ".$regDumb." telah ditransfer oleh ".$_SESSION["nama"]."',
							NOW(),
							'".$regDumb."',
							'".$_SESSION["username"]."',NOW()
						)
					";

					$result	  = mysqli_query($gate, $sql);
					/*end notif*/
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, data gagal diubah! ".$sql;
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $regDumb);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function changeStatusVerifikasiLegalitas($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		$name 		= "";
		$dumbQuery	= "";
		
		if(
				$data['pId'] == ""
			||	$data['refferenceId'] == ""
			||	$data['dataFetch'] == ""
		){ 
			$error = 1; 
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";}

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section

				$noreg	= $data['refferenceId'];
				$sql 	= " SELECT noRegistrasi, nama FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
					$name = mysqli_fetch_assoc($result);
					$name = $name['nama'];
				}else{
					$sql 	= " SELECT noRegistrasi, nama FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
						$name = mysqli_fetch_assoc($result);
						$name = $name['nama'];
					}else{
						//error state
						$error		= 1;
						$resultType  = "danger";
						$resultMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql 	= " SELECT kodePersyaratan FROM dplega_009_legalitas".$dumbTable." WHERE noRegistrasi = '".$noreg."' AND kodePersyaratan='".$data['pId']."' AND urlFile <> '' AND urlFile IS NOT NULL";
					$result = mysqli_query($gate, $sql);
					if(!(mysqli_num_rows($result) > 0)) {
						//error state
						$error		= 1;
						$resultType  = "danger";
						$resultMsg	= "Terjadi kesalahan, legalitas wajib memiliki lampiran!";
					}

					if($error != 1){
						$sql = 
						"	UPDATE dplega_009_legalitas".$dumbTable."
							SET
								statusVerifikasi	= '".$data['dataFetch']."',
								changedBy 			= '".$_SESSION['username']."',
								changedDate			= NOW()
							
							WHERE
								noRegistrasi = '".$noreg."'
							AND kodePersyaratan = '".$data['pId']."'
						";

						$result	  = mysqli_query($gate, $sql);
						if($result){	
							$error	    = 0;
							$resultType = "success";
							$resultMsg  = "data berhasil diubah.";

							$sqlD = "SELECT l.`namaPersyaratan` FROM dplega_201_persyaratan l WHERE l.kodePersyaratan = '".$data['pId']."'";
							$resD = mysqli_fetch_assoc(mysqli_query($gate, $sqlD));
							$resD = (($resD != null) ? $resD['namaPersyaratan'] : '');
							$check= (($data['dataFetch'] == '1') ? 'telah diverifikasi' : 'tidak disetujui'); 

							/*add notif*/
							$sql = 
							"	INSERT INTO dplega_901_notifications
								(
									deskripsi,
									waktu,
									targetUser,
									createdBy, createdDate
								)
								VALUES
								(
									'Legalitas : ".$resD." milik ".$name." ".$check." oleh ".$_SESSION["nama"]."',
									NOW(),
									'".$noreg."',
									'".$_SESSION["username"]."',NOW()
								)
							";

							$result	  = mysqli_query($gate, $sql);
							/*end notif*/

						}else{
							//error state
							$error		= 1;
							$resultType = "danger";
							$resultMsg	= "Terjadi kesalahan fatal, data gagal diubah!";
						}
					}
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}

		}else{
			//error state
			$error		= 1;
			$errorType  = "danger";
			$errorMsg	= "Terjadi kesalahan, tidak dapat mengenali data!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => "", "feedPId" => "");
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function changeStatusVerifikasiVerifikasi($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		$name 		= "";
		$dumbQuery	= "";
		
		if(
				$data['pId'] == ""
			||	$data['refferenceId'] == ""
			||	$data['dataFetch'] == ""
		){ 
			$error = 1; 
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";}

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section

				$noreg	= $data['refferenceId'];
				$sql 	= " SELECT noRegistrasi, nama FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
					$name = mysqli_fetch_assoc($result);
					$name = $name['nama'];
				}else{
					$sql 	= " SELECT noRegistrasi, nama FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
						$name = mysqli_fetch_assoc($result);
						$name = $name['nama'];
					}else{
						//error state
						$error		= 1;
						$resultType  = "danger";
						$resultMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){

					$sql 	= " SELECT noRegistrasi FROM dplega_012_verifikasi".$dumbTable." WHERE noRegistrasi = '".$noreg."' AND kodeVerifikasi = '".$data['pId']."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$sql = 
						"	UPDATE dplega_012_verifikasi".$dumbTable."
							SET
								status			= '".$data['dataFetch']."',
								changedBy 		= '".$_SESSION['username']."',
								changedDate		= NOW()
							
							WHERE
								noRegistrasi = '".$noreg."'
							AND kodeVerifikasi = '".$data['pId']."'
						";

					}else{
						$sql = 
						"	INSERT INTO dplega_012_verifikasi".$dumbTable."
							(
								noRegistrasi,
								kodeVerifikasi,
								status,
								createdBy,
								createdDate
							)
							VALUES
							(
								'".$noreg."',
								'".$data['pId']."',
								'".$data['dataFetch']."',
								'".$_SESSION['username']."',NOW()
							);
						";
					}

					$result	  = mysqli_query($gate, $sql);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "data berhasil diubah.";

						$sqlD = "SELECT l.`namaVerifikasi` FROM dplega_221_verifikasi l WHERE l.kodeVerifikasi = '".$data['pId']."'";
						$resD = mysqli_fetch_assoc(mysqli_query($gate, $sqlD));
						$resD = (($resD != null) ? $resD['namaVerifikasi'] : '');
						$check= (($data['dataFetch'] == '1') ? 'telah diverifikasi' : 'tidak disetujui'); 
						
						/*add notif*/
						$sql = 
						"	INSERT INTO dplega_901_notifications
							(
								deskripsi,
								waktu,
								targetUser,
								createdBy, createdDate
							)
							VALUES
							(
								'".$resD.' milik '.$name." ".$check." oleh".$_SESSION["nama"]."',
								NOW(),
								'".$noreg."',
								'".$_SESSION["username"]."',NOW()
							)
						";

						$result	  = mysqli_query($gate, $sql);
						/*end notif*/

					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal diubah!";
					}
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}

		}else{
			//error state
			$error		= 1;
			$errorType  = "danger";
			$errorMsg	= "Terjadi kesalahan, tidak dapat mengenali data!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => "", "feedPId" => "");
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function moveLembaga($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		$name 		= "";
		$dumbQuery	= "";
		
		if(
				$data['refferenceId'] == ""
		){ 
			$error = 1; 
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";}

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section
				$noreg	= $data['refferenceId'];
				$sql 	= " SELECT noRegistrasi, nama FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
					$name = mysqli_fetch_assoc($result);
					$name = $name['nama'];
				}else{
					$sql 	= " SELECT noRegistrasi, nama FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
						$name = mysqli_fetch_assoc($result);
						$name = $name['nama'];
					}else{
						//error state
						$error		= 1;
						$resultType  = "danger";
						$resultMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){

					try {
						// Set autocommit to off
						mysqli_autocommit($gate,FALSE);

						if($data['dataFetch'] == '1' && $dumbTable == "_temp"){
							mysqli_query($gate, "INSERT INTO dplega_000_lembaga 			SELECT * FROM dplega_000_lembaga_temp 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_001_sejarah 			SELECT * FROM dplega_001_sejarah_temp 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_002_kepengurusan 		SELECT * FROM dplega_002_kepengurusan_temp 		WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_003_usaha 				SELECT * FROM dplega_003_usaha_temp 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_005_koleksi 			SELECT * FROM dplega_005_koleksi_temp 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_006_prestasi 			SELECT * FROM dplega_006_prestasi_temp 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_007_visualisasiusaha 	SELECT * FROM dplega_007_visualisasiusaha_temp 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_008_visualisasisarana 	SELECT * FROM dplega_008_visualisasisarana_temp WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_009_legalitas 			SELECT * FROM dplega_009_legalitas_temp 		WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_010_riwayatbantuan 		SELECT * FROM dplega_010_riwayatbantuan_temp 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_011_hirarkilembaga 		SELECT * FROM dplega_011_hirarkilembaga_temp 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_012_verifikasi 			SELECT * FROM dplega_012_verifikasi_temp 		WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_013_verifikasilogs 		SELECT * FROM dplega_013_verifikasilogs_temp 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "UPDATE dplega_000_lembaga SET statusAktif = '1' WHERE noRegistrasi = '".$noreg."'");
							

							mysqli_query($gate, "DELETE FROM dplega_000_lembaga_temp 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_001_sejarah_temp 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_002_kepengurusan_temp 		WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_003_usaha_temp 				WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_005_koleksi_temp 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_006_prestasi_temp 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_007_visualisasiusaha_temp 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_008_visualisasisarana_temp 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_009_legalitas_temp 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_010_riwayatbantuan_temp 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_011_hirarkilembaga_temp 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_012_verifikasi_temp 		WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_013_verifikasilogs_temp 	WHERE noRegistrasi = '".$noreg."'");


						}elseif($data['dataFetch'] == '0' && $dumbTable == ""){
							mysqli_query($gate, "INSERT INTO dplega_000_lembaga_temp 			SELECT * FROM dplega_000_lembaga 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_001_sejarah_temp 			SELECT * FROM dplega_001_sejarah			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_002_kepengurusan_temp 		SELECT * FROM dplega_002_kepengurusan 		WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_003_usaha_temp 				SELECT * FROM dplega_003_usaha 				WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_005_koleksi_temp 			SELECT * FROM dplega_005_koleksi 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_006_prestasi_temp 			SELECT * FROM dplega_006_prestasi 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_007_visualisasiusaha_temp 	SELECT * FROM dplega_007_visualisasiusaha 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_008_visualisasisarana_temp 	SELECT * FROM dplega_008_visualisasisarana 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_009_legalitas_temp 			SELECT * FROM dplega_009_legalitas 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_010_riwayatbantuan_temp 	SELECT * FROM dplega_010_riwayatbantuan 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_011_hirarkilembaga_temp 	SELECT * FROM dplega_011_hirarkilembaga 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_012_verifikasi_temp 		SELECT * FROM dplega_012_verifikasi 		WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "INSERT INTO dplega_013_verifikasilogs_temp 	SELECT * FROM dplega_013_verifikasilogs 	WHERE noRegistrasi = '".$noreg."'");
							

							mysqli_query($gate, "DELETE FROM dplega_000_lembaga				WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_001_sejarah 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_002_kepengurusan 		WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_003_usaha 				WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_005_koleksi 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_006_prestasi 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_007_visualisasiusaha 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_008_visualisasisarana 	WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_009_legalitas 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_010_riwayatbantuan 		WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_011_hirarkilembaga 		WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_012_verifikasi 			WHERE noRegistrasi = '".$noreg."'");
							mysqli_query($gate, "DELETE FROM dplega_013_verifikasilogs 		WHERE noRegistrasi = '".$noreg."'");
						}

						mysqli_commit($gate);
					}
					catch(Exception $e) {
						mysqli_rollback($gate);
						$error = 1;
					}

					if($error != 1){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "data lembaga success divalidasi.";

						$check= (($data['dataFetch'] == '1') ? 'telah divalidasi' : 'tidak disetujui'); 
						
						/*add notif*/
						$sql = 
						"	INSERT INTO dplega_901_notifications
							(
								deskripsi,
								waktu,
								targetUser,
								createdBy, createdDate
							)
							VALUES
							(
								'Data kelengkapan ".$name." ".$check." oleh".$_SESSION["nama"]."',
								NOW(),
								'".$noreg."',
								'".$_SESSION["username"]."',NOW()
							)
						";

						$result	  = mysqli_query($gate, $sql);
						/*end notif*/

					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal diubah!";
					}
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}

		}else{
			//error state
			$error		= 1;
			$errorType  = "danger";
			$errorMsg	= "Terjadi kesalahan, tidak dapat mengenali data!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => "", "feedPId" => "");
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function createSaranaSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		$file_name	= "";
		
		/* Validation */
		if(
			!isset($data['keterangan']) || $data['keterangan']=="" ||
			!isset($data['noreg']) || $data['noreg']==""
		){ $error = 1; }
		
		if($error != 1){
		/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section
				$noreg	= $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql = " INSERT INTO dplega_008_visualisasisarana".$dumbTable."
						(
							noRegistrasi,
							deskripsi,
							createdBy, createdDate
						)
						VALUES
						(
							'".$noreg."',
							'".$data['keterangan']."',
							'".$_SESSION['username']."', NOW()
						)
					";

					$result	  	= mysqli_query($gate, $sql);
					$idRecent   = mysqli_insert_id($gate);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "Input berhasil disimpan.";
						/*upload image*/
							$Validextensions = array("jpeg", "jpg", "png", "gif");
							$temporary = explode(".", $_FILES["imageUrl"]["name"]);
							$file_extension = end($temporary);
							$file_name = "berkas belum diunggah...";				
							if (in_array($file_extension, $Validextensions)) {						
								if ($_FILES["imageUrl"]["error"] > 0)
								{
									$upload_message = $_FILES["imageUrl"];
								}
								else
								{		
									$file_name = $noreg."_".$idRecent."_sapra".".".$file_extension;				
									$sourcePath = $_FILES['imageUrl']['tmp_name']; // Storing source path of the file in a variable
									$targetPath = "img/saranaPrasarana/".$file_name; // Target path where file is to be stored
									if(move_uploaded_file($sourcePath,"../".$targetPath)){ /*Moving Uploaded file*/
										$sql = "UPDATE dplega_008_visualisasisarana".$dumbTable." SET 
													urlGambar = '".$file_name."' 
												WHERE noRegistrasi = '".$noreg."' AND idData = '".$idRecent."'";

										$result = mysqli_query($gate, $sql);									
									}								
								}
							}
						/*upload end*/		
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan!";
					}
				}else{
					//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, tidak dapat mengenali data!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $file_name, "feedPId" => $idRecent);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function createKepengurusanSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']==""
		){ $error = 1; }

		if($error != 1){
		/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section
				$noreg	= $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql = " INSERT INTO dplega_002_kepengurusan".$dumbTable."
						(
							noRegistrasi,
							penanggungJawab,
							alamat,
							noRt,
							noRw,
							kodeKelurahan,
							kodeKecamatan,
							kodeWilayah,
							kodeProvinsi,
							noTelp,
							kewarganegaraan,
							tempatLahir,
							tanggalLahir,
							jenisKelamin,
							agama,
							jabatanLain,
							pendidikan,
							kompetensi,
							catatan,
							createdBy, createdDate
						)
						VALUES
						(
							'".$noreg."',
							'".$data['penanggungJawab']."',
							'".$data['alamat']."',
							'".$data['rt']."',
							'".$data['rw']."',
							'".$data['kodeKelurahan']."',
							'".$data['kodeKecamatan']."',
							'".$data['kodeWilayah']."',
							'".$data['kodeProvinsi']."',
							'".$data['telp']."',
							'".$data['wargaNegara']."',
							'".$data['tempatLahir']."',
							'".$data['tanggalLahir']."',
							'".$data['jenisKelamin']."',
							'".$data['agama']."',
							'".$data['jabatanLain']."',
							'".$data['pendidikan']."',
							'".$data['kompetensi']."',
							'".$data['catatan']."',
							'".$_SESSION['username']."', NOW()
						)
					";

				}else{
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, tidak dapat mengenali data! ";
				}

				$result	  = mysqli_query($gate, $sql);
				if($result){	
					$error	    = 0;
					$resultType = "success";
					$resultMsg  = "Input berhasil disimpan.";
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan! ";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => "");
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function changeKepengurusanSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']==""
		){ $error = 1; }


		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section
				$noreg	= $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql 	= " SELECT noRegistrasi FROM dplega_002_kepengurusan".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$sql ="
							UPDATE dplega_002_kepengurusan".$dumbTable."
							SET
								penanggungJawab 	= '".$data['penanggungJawab']."',
								alamat 				= '".$data['alamat']."',
								noRt 				= '".$data['rt']."',
								noRw 				= '".$data['rw']."',
								kodeKelurahan 		= '".$data['kodeKelurahan']."',
								kodeKecamatan 		= '".$data['kodeKecamatan']."',
								kodeWilayah 		= '".$data['kodeWilayah']."',
								kodeProvinsi 		= '".$data['kodeProvinsi']."',
								noTelp 				= '".$data['telp']."',
								kewarganegaraan 	= '".$data['wargaNegara']."',
								tempatLahir 		= '".$data['tempatLahir']."',
								tanggalLahir 		= '".$data['tanggalLahir']."',
								jenisKelamin 		= '".$data['jenisKelamin']."',
								agama 				= '".$data['agama']."',
								jabatanLain 		= '".$data['jabatanLain']."',
								pendidikan 			= '".$data['pendidikan']."',
								kompetensi 			= '".$data['kompetensi']."',
								catatan 			= '".$data['catatan']."',
								changedBy 			= '".$_SESSION['username']."',
								changedDate			= NOW()
							WHERE
								noRegistrasi 		= '".$noreg."'
						";
					}else{
						$sql = " INSERT INTO dplega_002_kepengurusan".$dumbTable."
							(
								noRegistrasi,
								penanggungJawab,
								alamat,
								noRt,
								noRw,
								kodeKelurahan,
								kodeKecamatan,
								kodeWilayah,
								kodeProvinsi,
								noTelp,
								kewarganegaraan,
								tempatLahir,
								tanggalLahir,
								jenisKelamin,
								agama,
								jabatanLain,
								pendidikan,
								kompetensi,
								catatan,
								createdBy, createdDate
							)
							VALUES
							(
								'".$noreg."',
								'".$data['penanggungJawab']."',
								'".$data['alamat']."',
								'".$data['rt']."',
								'".$data['rw']."',
								'".$data['kodeKelurahan']."',
								'".$data['kodeKecamatan']."',
								'".$data['kodeWilayah']."',
								'".$data['kodeProvinsi']."',
								'".$data['telp']."',
								'".$data['wargaNegara']."',
								'".$data['tempatLahir']."',
								'".$data['tanggalLahir']."',
								'".$data['jenisKelamin']."',
								'".$data['agama']."',
								'".$data['jabatanLain']."',
								'".$data['pendidikan']."',
								'".$data['kompetensi']."',
								'".$data['catatan']."',
								'".$_SESSION['username']."', NOW()
							)
						";
					}

					$result	  = mysqli_query($gate, $sql);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "data berhasil diubah.";

					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal diubah!";
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, tidak dapat mengenali data!";
				}

				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan atau data tidak lengkap!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => "");
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;		
	}

	function createKegiatanUsahaSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']==""
		){ $error = 1; }

		if($error != 1){
		/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section
				$noreg	= $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql = " INSERT INTO dplega_003_usaha".$dumbTable."
						(
							noRegistrasi,
							namaUsaha,
							jenisUsaha,
							detailUsaha,
							jumlahPekerja,
							catatan,
							createdBy, createdDate
						)
						VALUES
						(
							'".$noreg."',
							'".$data['namaUsaha']."',
							'".$data['jenisUsaha']."',
							'".$data['detailUsaha']."',
							'".$data['jumlahPekerja']."',
							'".$data['catatan']."',
							'".$_SESSION['username']."', NOW()
						)
					";
				
					$result	  = mysqli_query($gate, $sql);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "Input berhasil disimpan.";
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan! ";
					}

				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, tidak dapat mengenali data!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => "");
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function changeKegiatanUsahaSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']==""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
				// connection = true
				//checking section
				$noreg	= $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql 	= " SELECT noRegistrasi FROM dplega_003_usaha".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$sql ="
							UPDATE dplega_003_usaha".$dumbTable."
							SET
								namaUsaha		= '".$data['namaUsaha']."',
								jenisUsaha		= '".$data['jenisUsaha']."',
								detailUsaha		= '".$data['detailUsaha']."',
								jumlahPekerja	= '".$data['jumlahPekerja']."',
								catatan 		= '".$data['catatan']."',
								changedBy 		= '".$_SESSION['username']."',
								changedBy 		= NOW()
							WHERE
								noRegistrasi 	= '".$noreg."'
						";
					}else{
						$sql = " INSERT INTO dplega_003_usaha".$dumbTable."
							(
								noRegistrasi,
								namaUsaha,
								jenisUsaha,
								detailUsaha,
								jumlahPekerja,
								catatan,
								createdBy, createdDate
							)
							VALUES
							(
								'".$noreg."',
								'".$data['namaUsaha']."',
								'".$data['jenisUsaha']."',
								'".$data['detailUsaha']."',
								'".$data['jumlahPekerja']."',
								'".$data['catatan']."',
								'".$_SESSION['username']."', NOW()
							)
						";
					}

					$result	  = mysqli_query($gate, $sql);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "data berhasil diubah.";	
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal diubah!";
					}

				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, tidak dapat mengenali data!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan atau data tidak lengkap!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => "");
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;		
	}

	function createVisualisasiUsahaSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$noreg		= "";
		$file_name	= "";
		
		/* Validation */
		if(
			!isset($data['keterangan']) || $data['keterangan']=="" ||
			!isset($data['noreg']) || $data['noreg']==""
		){ $error = 1; }
		
		if($error != 1){
		/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
			//checking section
				$noreg	= $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql = " 
					INSERT INTO dplega_007_visualisasiusaha".$dumbTable."
						(
							noRegistrasi,
							deskripsi,
							createdBy, createdDate
						)
						VALUES
						(
							'".$data['noreg']."',
							'".$data['keterangan']."',
							'".$_SESSION['username']."', NOW()
						)
					";
				
					$result	  	= mysqli_query($gate, $sql);
					$idRecent   = mysqli_insert_id($gate);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "Input berhasil disimpan.";
						/*upload image*/
							$Validextensions = array("jpeg", "jpg", "png", "gif");
							$temporary = explode(".", $_FILES["imageUrl"]["name"]);
							$file_extension = end($temporary);
							$file_name = "berkas belum diunggah...";					
							if (in_array($file_extension, $Validextensions)) {						
								if ($_FILES["imageUrl"]["error"] > 0)
								{
									$upload_message = $_FILES["imageUrl"];
								}
								else
								{		
									$file_name = $noreg."_".$idRecent."_usaha".".".$file_extension;				
									$sourcePath = $_FILES['imageUrl']['tmp_name']; // Storing source path of the file in a variable
									$targetPath = "img/usaha/".$file_name; // Target path where file is to be stored
									if(move_uploaded_file($sourcePath,"../".$targetPath)){ /*Moving Uploaded file*/
										$sql = "UPDATE dplega_007_visualisasiusaha".$dumbTable." SET 
													urlGambar = '".$file_name."' 
												WHERE noRegistrasi = '".$noreg."' AND idData = '".$idRecent."'";

										$result = mysqli_query($gate, $sql);									
									}								
								}
							}
						/*upload end*/		
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan! ";
					}
				
				}else{
					//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, tidak dapat mengenali data!";
				}

				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $file_name, "feedPId" => $idRecent);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function createKoleksiSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']=="" ||
			!isset($data['judulKoleksi']) || $data['judulKoleksi']=="" ||
			!isset($data['jenisKoleksi']) || $data['jenisKoleksi']==""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section
				$noreg	= $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql = " INSERT INTO dplega_005_koleksi".$dumbTable."
						(
							noRegistrasi,
							jenisKoleksi,
							judulKoleksi,
							deskripsi,
							createdBy, createdDate
						)
						VALUES
						(
							'".$data['noreg']."',
							'".$data['jenisKoleksi']."',
							'".$data['judulKoleksi']."',
							'".$data['deskripsi']."',
							'".$_SESSION['username']."', NOW()
						)
					";
				
					$result	  = mysqli_query($gate, $sql);
					$idRecent = mysqli_insert_id($gate);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "Input berhasil disimpan.";
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan! ".$eresult;
					}

				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, tidak dapat mengenali data!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $idRecent);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function deleteKelembagaan($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$dumbTable  = "";
		$noreg 	  	= "";
		$dumbRes 	= ['','','','','','','','','','','','','','',''];

		/* Validation */
		if(isset($data['pId']) && $data['pId'] != ""){
			
			/* open connection */ 
			$gate = openGate();
			if($gate){		
				// connection = true
				//checking section
				$noreg  = $data['pId'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){

					//delete phase
					//mysqli_query("BEGIN");

						//legalitas					
						$sql 	= "DELETE FROM dplega_009_legalitas".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
						$dumbRes[0] = mysqli_query($gate, $sql);

						$sql 	= "DELETE FROM dplega_001_sejarah".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
						$dumbRes[2] = mysqli_query($gate, $sql);

						//bantuan
						$sql 	= "DELETE FROM dplega_010_riwayatbantuan".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
						$dumbRes[3] = mysqli_query($gate, $sql);

						//sarana unlink ---
						$sql 	= "DELETE FROM dplega_008_visualisasisarana".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
						$dumbRes[4] = mysqli_query($gate, $sql);

						//kepengurusan
						$sql 	= "DELETE FROM dplega_002_kepengurusan".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
						$dumbRes[5] = mysqli_query($gate, $sql);

						//usaha
						$sql 	= "DELETE FROM dplega_003_usaha".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
						$dumbRes[6] = mysqli_query($gate, $sql);

						//visualisasi usaha unlink ---
						$sql 	= "DELETE FROM dplega_007_visualisasiusaha".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
						$dumbRes[7] = mysqli_query($gate, $sql);

						//hirarki
						$sql 	= "DELETE FROM dplega_011_hirarkilembaga".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
						$dumbRes[8] = mysqli_query($gate, $sql);

						//koleksi
						$sql 	= "DELETE FROM dplega_005_koleksi".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
						$dumbRes[9] = mysqli_query($gate, $sql);

						//prestasi
						$sql 	= "DELETE FROM dplega_006_prestasi".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
						$dumbRes[10] = mysqli_query($gate, $sql);

						$sql 	= "DELETE FROM dplega_000_lembaga".$dumbTable." WHERE noRegistrasi = '".$noreg."'";
						$dumbRes[12] = mysqli_query($gate, $sql);

						$username = "";
						$sql 	= " SELECT username FROM dplega_910_user WHERE noRegistrasi = '".$noreg."'";
						$result = mysqli_query($gate, $sql);
						if(mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								$username = $row['username'];
							}
						}

						$sql 	= "DELETE FROM dplega_911_useraccess WHERE username = '".$username."'";
						$dumbRes[1] = mysqli_query($gate, $sql);

						$sql 	= "DELETE FROM dplega_910_user WHERE username = '".$username."'";
						$dumbRes[11] = mysqli_query($gate, $sql);

					if(
						   $dumbRes[0]
						&& $dumbRes[1]
						&& $dumbRes[2]
						&& $dumbRes[3]
						&& $dumbRes[4]
						&& $dumbRes[5]
						&& $dumbRes[6]
						&& $dumbRes[7]
						&& $dumbRes[8]
						&& $dumbRes[9]
						&& $dumbRes[10]
						&& $dumbRes[11]
						&& $dumbRes[12]
					){
						//mysqli_query("COMMIT");

						//logo
						$dir 	= "../img/logo/";
						$images = glob($dir.$data['pId']."_*");
						foreach ($images as $image) {
							unlink($image);
						}

						//strutur organisasi
						$dir 	= "../img/strukturOrganisasi/";
						$images = glob($dir.$data['pId']."_*");
						foreach ($images as $image) {
							unlink($image);
						}

						//legalitas
						$dir 	= "../img/legalitas/";
						$images = glob($dir.$data['pId']."_*");
						foreach ($images as $image) {
							unlink($image);
						}

						//sarana
						$dir 	= "../img/saranaPrasarana/";
						$images = glob($dir.$data['pId']."_*");
						foreach ($images as $image) {
							unlink($image);
						}

						//usaha
						$dir 	= "../img/usaha/";
						$images = glob($dir.$data['pId']."_*");
						foreach ($images as $image) {
							unlink($image);
						}

						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "data berhasil dihapus.";
					}else{
					//error
						//mysqli_query("ROLLBACK");
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal dihapus! ";
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan, tidak dapat mengenali data!";
				}
					
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $data['pId']);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function deleteSaranaSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$dumbTable  = "";
		$noreg 	  	= "";

		/* Validation */
		if(	
			   isset($data['pId']) && $data['pId'] != "" 
			&& isset($data['refferenceId']) && $data['refferenceId'] != "")
		{
			
			/* open connection */ 
			$gate = openGate();
			if($gate){		
				// connection = true
				//checking section
				$noreg  = $data['refferenceId'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){

					$sql 	= "
						SELECT urlGambar as urlFile FROM dplega_008_visualisasisarana".$dumbTable." 
						WHERE noRegistrasi = '".$noreg."' AND idData = '".$data['pId']."'";
		
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							if(file_exists("../img/saranaPrasarana/".$row['urlFile'])){
								unlink("../img/saranaPrasarana/".$row['urlFile']);
							}else{
								$error = 1;
							}
						}
					}
					
					if($error != 1){
						$sql = "DELETE FROM dplega_008_visualisasisarana".$dumbTable." WHERE idData ='".$data['pId']."' AND noRegistrasi = '".$noreg."'";
						
						$result = mysqli_query($gate, $sql);
						if($result){	
							$error	    = 0;
							$resultType = "success";
							$resultMsg  = "data berhasil dihapus.";		
						}else{
							//error state
							$error		= 1;
							$resultType = "danger";
							$resultMsg	= "Terjadi kesalahan fatal, data gagal dihapus! ";
						}
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal dihapus! ";
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan, tidak dapat mengenali data!";
				}

				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $data['pId']);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function deleteVisualisasiUsahaSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$dumbTable  = "";
		$noreg 	  	= "";
		$file_name = "berkas belum diunggah...";

		/* Validation */
		if(	
			   isset($data['pId']) && $data['pId'] != "" 
			&& isset($data['refferenceId']) && $data['refferenceId'] != "")
		{
			
			/* open connection */ 
			$gate = openGate();
			if($gate){		
				// connection = true
				//checking section
				$noreg  = $data['refferenceId'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql 	= "
						SELECT urlGambar as urlFile FROM dplega_007_visualisasiusaha".$dumbTable." 
						WHERE noRegistrasi = '".$noreg."' AND idData = '".$data['pId']."'";
		
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							if(file_exists("../img/usaha/".$row['urlFile'])){
								unlink("../img/usaha/".$row['urlFile']);
							}else{
								$error = 1;
							}
						}
					}
					
					if($error != 1){
						$sql = "DELETE FROM dplega_007_visualisasiusaha".$dumbTable." WHERE idData ='".$data['pId']."' AND noRegistrasi = '".$noreg."'";
						$result = mysqli_query($gate, $sql);	

						if($result){	
							$error	    = 0;
							$resultType = "success";
							$resultMsg  = "data berhasil dihapus.";	
						}else{
							//error state
							$error		= 1;
							$resultType = "danger";
							$resultMsg	= "Terjadi kesalahan fatal, data gagal dihapus! ";
						}
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal dihapus! ";
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan, tidak dapat mengenali data!";
				}

				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $data['pId']);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function deleteKoleksiSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$dumbTable  = "";
		$noreg 	  	= "";

		/* Validation */
		if(	
			   isset($data['pId']) && $data['pId'] != "" 
			&& isset($data['refferenceId']) && $data['refferenceId'] != "")
		{
			
			/* open connection */ 
			$gate = openGate();
			if($gate){		
				// connection = true
				//checking section
				$noreg  = $data['refferenceId'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql = "DELETE FROM dplega_005_koleksi".$dumbTable." WHERE idData ='".$data['pId']."' AND noRegistrasi = '".$noreg."'";
					
					$result = mysqli_query($gate, $sql);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "data berhasil dihapus.";		
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal dihapus! ";
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan, tidak dapat mengenali data!";
				}

				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $data['pId']);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function getLegalitasSection(){
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
		$gate = openGate();
		if($gate){		
			// connection = true
			$sql = 	"";
						
			$result = mysqli_query($gate, $sql);
			if($result){
				if(mysqli_num_rows($result) > 0) {
					// output data of each row
					$statLoop  = 0;
					$counter   = mysqli_num_rows($result);
					$fetch 	   = array();
					$record    = array();
					$package   = array();
					while($row = mysqli_fetch_assoc($result)) {
						
						unset($fetch); $fetch = array();
						
						if($statLoop == 0) { $next  = $row['group']; }
						
						if($next != $row['group']){
							$package[$next] = $record;
							unset($record); 
							$record = array();
							$next   = $row['group'];
						}
						
						$fetch = array(
									"noreg"   		=> $row['code'],
									"group"   	 	=> $row['target'],
									"caption" 	 	=> $row['name'],
									"references" 	=> $row['references'],
									"referencesKey" => $row['referencesKey']
								);
						
						array_push($record, $fetch); 
						$statLoop++;
						if($statLoop == $counter){
							$package[$row['group']] = $record;
							unset($record); 
							$record = array();
						}
					}
					
					$resultList = array( "feedStatus" => "success", "feedMessage" => "Data ditemukan!", "feedData" => array($package));
				}else {
					$resultList = array( "feedStatus" => "success", "feedMessage" => "Data tidak ditemukan!", "feedData" => null);
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

	function createPrestasiSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']=="" ||
			!isset($data['deskripsi']) || $data['deskripsi']==""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section
				$noreg	= $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql = " INSERT INTO dplega_006_prestasi".$dumbTable."
						(
							noRegistrasi,
							deskripsi,
							createdBy, createdDate
						)
						VALUES
						(
							'".$data['noreg']."',
							'".$data['deskripsi']."',
							'".$_SESSION['username']."', NOW()
						)
					";
				
					$result	  = mysqli_query($gate, $sql);
					$idRecent = mysqli_insert_id($gate);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "Input berhasil disimpan.";
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan! ".$eresult;
					}

				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, tidak dapat mengenali data!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $idRecent);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function createHirarkiSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$noreg		= "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']=="" ||
			!isset($data['hirarki']) || $data['hirarki']=="" ||
			!isset($data['noregTarget']) || $data['noregTarget']==""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section
				$noreg	= $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					if($data['hirarki'] == "0"){
						$sql 	= " SELECT hirarki FROM dplega_011_hirarkilembaga".$dumbTable." WHERE noRegistrasi = '".$noreg."' AND hirarki = '0'";
						$result = mysqli_query($gate, $sql);
						if(mysqli_num_rows($result) > 0) {
							$error = 1;
							$resultType = "danger";
							$resultMsg	= "Induk lembaga tidak bisa lebih dari satu! ";
						}
					}

					if($error != 1){
						$sql = " INSERT INTO dplega_011_hirarkilembaga".$dumbTable."
							(
								noRegistrasi,
								hirarki,
								noRegistrasiTarget,
								createdBy, createdDate
							)
							VALUES
							(
								'".$data['noreg']."',
								'".$data['hirarki']."',
								'".$data['noregTarget']."',
								'".$_SESSION['username']."', NOW()
							)
						";
					
						$result	  = mysqli_query($gate, $sql);
						if($result){	
							$error	    = 0;
							$resultType = "success";
							$resultMsg  = "Input berhasil disimpan.";
						}else{
							//error state
							$error		= 1;
							$resultType = "danger";
							$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan! ";
						}
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, tidak dapat mengenali data!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => "");
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function createCatatanVerifikasi($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$idRecent	= "";
		$idTemp		= "";
		$dumbTable  = "";
		$type 		= "";
		$noreg		= "";
		
		/* Validation */
		if(
			!isset($data['noreg']) || $data['noreg']=="" ||
			!isset($data['catatan']) || $data['catatan']==""
		){ $error = 1; }

		if($error != 1){
			/* open connection */
			$gate = openGate();
			if($gate){
			// connection = true
				//checking section
				$noreg	= $data['noreg'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$type = (($target == "f151") ? '0' : '1');
					$sql = " INSERT INTO dplega_013_verifikasilogs".$dumbTable."
						(
							noRegistrasi,
							kode,
							type,
							catatan,
							createdBy, createdDate
						)
						VALUES
						(
							'".$data['noreg']."',
							'".$data['kode']."',
							'".$type."',
							'".$data['catatan']."',
							'".$_SESSION['username']."', NOW()
						)
					";
				
					$result	  = mysqli_query($gate, $sql);
					$idRecent = mysqli_insert_id($gate);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "Input berhasil disimpan.";
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, input gagal disimpan! ".$eresult;
					}

				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan fatal, tidak dapat mengenali data!";
				}
				
				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, mandatory tidak boleh kosong!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $idRecent);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function deletePrestasiSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$dumbTable  = "";
		$noreg 	  	= "";

		/* Validation */
		if(	
			   isset($data['pId']) && $data['pId'] != "" 
			&& isset($data['refferenceId']) && $data['refferenceId'] != "")
		{
			
			/* open connection */ 
			$gate = openGate();
			if($gate){		
				// connection = true
				//checking section
				$noreg  = $data['refferenceId'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql = "DELETE FROM dplega_006_prestasi".$dumbTable." WHERE idData ='".$data['pId']."' AND noRegistrasi = '".$noreg."'";
					
					$result = mysqli_query($gate, $sql);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "data berhasil dihapus.";		
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal dihapus! ";
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan, tidak dapat mengenali data!";
				}

				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $data['pId']);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function deleteLegalitasSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$dumbTable  = "";
		$noreg 	  	= "";
		$nama 	  	= "";

		/* Validation */
		if(	
			   isset($data['pId']) && $data['pId'] != "" 
			&& isset($data['refferenceId']) && $data['refferenceId'] != "")
		{
			
			/* open connection */ 
			$gate = openGate();
			if($gate){		
				// connection = true
				//checking section
				$noreg  = $data['refferenceId'];
				$sql 	= " SELECT noRegistrasi,nama FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
					while($row = mysqli_fetch_assoc($result)) { $nama = $row['nama']; }
				}else{
					$sql 	= " SELECT noRegistrasi,nama FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
						while($row = mysqli_fetch_assoc($result)) { $nama = $row['nama']; }
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql = "DELETE FROM dplega_009_legalitas".$dumbTable." WHERE kodePersyaratan ='".$data['pId']."' AND noRegistrasi = '".$noreg."'";
					
					$result = mysqli_query($gate, $sql);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "data berhasil dihapus.";	

						/*add notif*/
						$namaPersyaratan = "";
						$sql 	= " SELECT namaPersyaratan FROM dplega_201_persyaratan WHERE kodePersyaratan = '".$data['pId']."'";
						$result = mysqli_query($gate, $sql);
						if(mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) { $namaPersyaratan = $row['namaPersyaratan']; }
						}

						$sql = 
						"	INSERT INTO dplega_901_notifications
							(
								deskripsi,
								waktu,
								targetUser,
								createdBy, createdDate
							)
							VALUES
							(
								'Legalitas (".$namaPersyaratan.") ".$nama." telah dihapus oleh ".$_SESSION["nama"]."',
								NOW(),
								'".$noreg."',
								'".$_SESSION["username"]."',NOW()
							)
						";

						$result	  = mysqli_query($gate, $sql);
						/*end notif*/
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal dihapus! ";
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan, tidak dapat mengenali data!";
				}

				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $data['pId']);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function deleteSejarahBantuanSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$dumbTable  = "";
		$noreg 	  	= "";

		/* Validation */
		if(	
			   isset($data['pId']) && $data['pId'] != "" 
			&& isset($data['refferenceId']) && $data['refferenceId'] != "")
		{
			
			/* open connection */ 
			$gate = openGate();
			if($gate){		
				// connection = true
				//checking section
				$noreg  = $data['refferenceId'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql = "DELETE FROM dplega_010_riwayatbantuan".$dumbTable." WHERE idData ='".$data['pId']."' AND noRegistrasi = '".$noreg."'";
					
					$result = mysqli_query($gate, $sql);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "data berhasil dihapus.";		
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal dihapus! ";
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan, tidak dapat mengenali data!";
				}

				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $data['pId']);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

	function deleteHirarkiSection($target, $data){
		/* initial condition */
		$resultList = array();
		$table 		= "";
		$field 		= array();
		$rows		= 0;
		$condition 	= "";
		$orderBy	= "";
		$error		= 0;
		$resultType = "";
		$resultMsg	= "";
		$counter	= "";
		$dumbTable  = "";
		$noreg 	  	= "";

		/* Validation */
		if(	
			   isset($data['pId']) && $data['pId'] != "" 
			&& isset($data['refferenceId']) && $data['refferenceId'] != "")
		{
			
			/* open connection */ 
			$gate = openGate();
			if($gate){		
				// connection = true
				//checking section
				$noreg  = $data['refferenceId'];
				$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga WHERE noRegistrasi = '".$noreg."'";
				$result = mysqli_query($gate, $sql);
				if(mysqli_num_rows($result) > 0) {
					$dumbTable = "";
				}else{
					$sql 	= " SELECT noRegistrasi FROM dplega_000_lembaga_temp WHERE noRegistrasi = '".$noreg."'";
					$result = mysqli_query($gate, $sql);
					if(mysqli_num_rows($result) > 0) {
						$dumbTable = "_temp";
					}else{
						//error state
						$error		= 1;
						$errorType  = "danger";
						$errorMsg	= "Terjadi kesalahan, data tidak dikenal!";
					}
				}

				if($error != 1){
					$sql = "DELETE FROM dplega_011_hirarkilembaga".$dumbTable." WHERE noRegistrasi ='".$data['pId']."' AND noRegistrasiTarget = '".$noreg."'";
					
					$result = mysqli_query($gate, $sql);
					if($result){	
						$error	    = 0;
						$resultType = "success";
						$resultMsg  = "data berhasil dihapus.";		
					}else{
						//error state
						$error		= 1;
						$resultType = "danger";
						$resultMsg	= "Terjadi kesalahan fatal, data gagal dihapus! ";
					}
				}else{
					//error state
					$error		= 1;
					$resultType = "danger";
					$resultMsg	= "Terjadi kesalahan, tidak dapat mengenali data!";
				}

				closeGate($gate);
			}else{
				//error state
				$error		= 1;
				$resultType = "danger";
				$resultMsg	= "Terjadi kesalahan, tidak dapat terhubung ke server!";
			}
		}else{
			//error state
			$error		= 1;
			$resultType = "danger";
			$resultMsg	= "Terjadi kesalahan, ID tidak ditemukan!";
		}
		
		if($error == 1){
			//error state
			$resultList = array( "feedStatus" => "failed", "feedType" => $resultType, "feedMessage" => $resultMsg);
		}else{
			$resultList = array( "feedStatus" => "success", "feedType" => $resultType, "feedMessage" => $resultMsg, "feedId" => $data['pId']);
		}
		
		/* result fetch */
		$json = $resultList;
		
		return $json;
	}

?>