<?php 
	Class Auth {
		public function __construct(){
			if (session_status() == PHP_SESSION_NONE) {session_start();} // session start
			require_once('protected/config.php');
			$this->db = openGate();
		}

		public function login($dataPost){
			/* initial condition */
			$username  		= $dataPost->username;
			$password		= $dataPost->password;
			$avatar 		= "";
			$nama			= "";						
			$userLevel		= "";	
			$noRegistrasi	= "";
			$userLevel 		= "";
			$avatar 		= "";
			$lingkupArea 	= "";
			$idBatasArea 	= "";
			$statusActive 	= "";
			$access			= array();
			$accessDumb		= array();
			$loginStatus	= "no";	
			$error			= 0;
			$errorType  	= "";
			$errorMsg		= "";
			$resultList 	= array( "feedStatus" => "failed", "feedType" => "danger", "feedMessage" => "username atau password yang anda masukan salah!", "feedData" => array());
			$dum = 0;
			//validation 
			$gate = $this->db;
			if($gate && $username != "" && $password !=""){			
				$sql  = 
				"	SELECT 
						idData,
						noRegistrasi,
						nama,
						userLevel,
						urlGambar,
						lingkupArea,
						idBatasArea,
						statusActive
					FROM 
						dplega_910_user u
					WHERE 
						u.username = '".$username."' 
					AND u.password = md5('".$password."') 
					AND u.statusActive = '1'
				";
							
				$res = $this->db->query($sql);
				if($res){
					$data = $res->fetchAll();
					foreach($data as $row) {
					
						$sql2 = 	
						"SELECT u.*, a.appsName FROM dplega_911_useraccess u
						 JOIN 
							dplega_912_apps a 
						 ON u.idApps = a.idData
						 WHERE username = '".$username."'";

						$ress = $this->db->query($sql2);
						if($ress){
							$datas = $ress->fetchAll();
							foreach($datas as $list2) {
								$accessTemp = array(
									"module" 		=> $list2['module'],
									"lihat" 		=> $list2['lihat'],
									"tambah" 		=> $list2['tambah'],
									"ubah" 			=> $list2['ubah'],
									"hapus" 		=> $list2['hapus'],
									"statusAccess" 	=> $list2['statusAktif']
								);

								array_push($accessDumb, $accessTemp);
								unset($accessTemp); $accessTemp = array();
							}
						}
							
						$noRegistrasi	= $row['noRegistrasi'];
						$nama 			= $row['nama'];
						$userLevel 		= $row['userLevel'];
						$avatar 		= (($row['urlGambar'] != null) ? $row['urlGambar'] : 'avatar-'.substr($row['idData'], strlen($row['idData']) -1, 1).".jpg");
						$lingkupArea	= $row['lingkupArea'];
						$idBatasArea	= $row['idBatasArea'];
						$statusActive 	= $row['statusActive'];
						$access			= $accessDumb;
						
					}

					$loginStatus = "yes";
					$error = 0;
				}else{
					$error = 1;
				}
			}else{
				$error = 0;
			}
			
			/* result fetch */
			if($error == 0){	
				$feedData = array( 
					"login" 		=> $loginStatus, 
					"noRegistrasi" 	=> $noRegistrasi, 
					"username" 		=> $username, 
					"nama" 			=> $nama, 
					"userLevel" 	=> $userLevel,
					"avatar" 		=> $avatar, 
					"lingkupArea" 	=> $lingkupArea, 
					"idBatasArea" 	=> $idBatasArea, 
					"statusActive" 	=> $statusActive, 
					"accessList" 	=> $access, 
					"feedStatus"	=> "success"
				);

				$resultList = array( "feedStatus" => "success", "feedType" => "success", "feedMessage" => "Selamat datang!", "feedId" => $feedData);
			}

			/* result fetch */
			$json = $resultList;
			
			return $json;
		}
		
		public function logout(){
			$json = array( "status" => "failed");

			// remove all session variables		
			unset($_SESSION["nama"]);
			unset($_SESSION["username"]);
			unset($_SESSION["userLevel"]);
			unset($_SESSION["urlGambar"]);

			unset($_SESSION["login"]); 
			unset($_SESSION["noRegistrasi"]);
			unset($_SESSION["username"]);
			unset($_SESSION["nama"]);
			unset($_SESSION["userLevel"]);
			unset($_SESSION["urlGambar"]);
			unset($_SESSION["statusActive"]);
			unset($_SESSION["accessList"]);
			
			if(session_destroy()){ $json = array( "feedStatus" => "success"); } 		
			
			return $json;
		}
	}
?>