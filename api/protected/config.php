<?php
	define('db_host', "localhost");
	define('db_user', "root");
	define('db_pass', "root");
	define('db_name', "dplega_dumb");
	// define('db_host', "http://dplega.yanbangsos.jabarprov.go.id");
	// define('db_user', "JabaRdplega2");
	// define('db_pass', "dbdplega552");
	// define('db_name', "db_dplegayanbangsos");

	function openGate(){
		$gate = new PDO("mysql:host=".db_host.";dbname=".db_name, db_user, db_pass);
		$gate->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $gate;
	}

	function closeGate($gate){
		mysqli_close($gate);
	}
?>
