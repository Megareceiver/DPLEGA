<?php
	define('db_host', "localhost");
	define('db_user', "root");
	define('db_pass', "root");
	define('db_name', "dplega_live");

	function openGate(){

		// Create connection
		$gate = mysqli_connect(db_host, db_user, db_pass, db_name);
		return $gate;
	}

	function closeGate($gate){
		mysqli_close($gate);
	}
?>
