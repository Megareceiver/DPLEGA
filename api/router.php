<?php
/* API ROUTER */

	// Set default HTTP response of 'Not Found'
	$response['status'] = 404;
	$response['data'] = NULL;

	$url_array = explode('/', $_SERVER['REQUEST_URI']);
	array_shift($url_array); // remove first value as it's empty
	// remove 2nd and 3rd array, because it's directory
	array_shift($url_array); // 2nd = 'NativeREST'
	array_shift($url_array); // 3rd = 'api'

	// get the action (resource, collection)
	$action = $url_array[0];
	$group  = $url_array[1];
	$target = $url_array[2];
	// get the method
	$method = $_SERVER['REQUEST_METHOD'];


	//declare 
	$error = 0;
	$response['status'] = 400; //error init state
	$response['data']   = array( "feedStatus" => "forbidden", "feedType" => "danger", "feedMessage" => "Akses ditolak!", "feedData" => array());

	switch($group){
		// case "f1"			: require_once('protected/f1.php');break;
		// case "f3"			: require_once('protected/f3.php'); break;
		case "f4"				: require_once('protected/f4.php'); $func = new F4(); break;
		// case "fNotification": require_once('protected/fNotification.php'); break;
		// case "fLogin"		: require_once('protected/authentication.php'); break;
		// case "dumb"			: require_once('protected/dumb.php'); break;
		// case "support"		: require_once('protected/support.php'); break;
		default  			: $error = 1; break;
	}
	
	if($error != 1){
		switch ($action) {
			case 'requestData':
				$response['data']   = $func->requestData($target);
				$response['status'] = 200;
			break;
			
			/* auth session */
			// case 'login':  
			// 	$response['data']= login($_POST);
			// break;


				//if(!isset($url_array[1])){
					
					
				//}else{
					// METHOD : GET api/barang/:idBarang
					// $idBarang=$url_array[1];
					// $data=$barang->getBarang($idBarang);
					// if(empty($data)) {
					// 	$response['status'] = 404;
					// 	$response['data'] = array('error' => 'Barang tidak ditemukan');	
					// }else{
					// 	$response['status'] = 200;
					// 	$response['data'] = $data;	
					// }
				//}

			
			
			// default:
			// 	$json = array( "feedStatus" => "failed", "feedType" => "danger", "feedMessage" => "Terjadi kesalahan fatal, proses dibatalkan!", "feedData" => array());
			// break;
		}
	}

	// Return Response to browser
	deliver_response($response);
?>

<?php
	//functions section
	function deliver_response($response){
		// Define HTTP responses
		$http_response_code = array(
			100 => 'Continue',  
			101 => 'Switching Protocols',  
			200 => 'OK',
			201 => 'Created',  
			202 => 'Accepted',  
			203 => 'Non-Authoritative Information',  
			204 => 'No Content',  
			205 => 'Reset Content',  
			206 => 'Partial Content',  
			300 => 'Multiple Choices',  
			301 => 'Moved Permanently',  
			302 => 'Found',  
			303 => 'See Other',  
			304 => 'Not Modified',  
			305 => 'Use Proxy',  
			306 => '(Unused)',  
			307 => 'Temporary Redirect',  
			400 => 'Bad Request',  
			401 => 'Unauthorized',  
			402 => 'Payment Required',  
			403 => 'Forbidden',  
			404 => 'Not Found',  
			405 => 'Method Not Allowed',  
			406 => 'Not Acceptable',  
			407 => 'Proxy Authentication Required',  
			408 => 'Request Timeout',  
			409 => 'Conflict',  
			410 => 'Gone',  
			411 => 'Length Required',  
			412 => 'Precondition Failed',  
			413 => 'Request Entity Too Large',  
			414 => 'Request-URI Too Long',  
			415 => 'Unsupported Media Type',  
			416 => 'Requested Range Not Satisfiable',  
			417 => 'Expectation Failed',
			500 => 'Internal Server Error',  
			501 => 'Not Implemented',  
			502 => 'Bad Gateway',  
			503 => 'Service Unavailable',  
			504 => 'Gateway Timeout',  
			505 => 'HTTP Version Not Supported'
			);

		// Set HTTP Response
		header('HTTP/1.1 '.$response['status'].' '.$http_response_code[ $response['status'] ]);
		// Set HTTP Response Content Type
		header('Content-Type: application/json; charset=utf-8');
		// Format data into a JSON response
		$json_response = json_encode($response['data']);
		// Deliver formatted data
		echo $json_response;

		exit;
	}

?>