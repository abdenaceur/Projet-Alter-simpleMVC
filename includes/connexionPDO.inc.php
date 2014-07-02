<?php
function connexionPDO($base,$param) {
	include_once($param.".inc.php");
	$dsn  = "mysql:host=".HOST.";dbname=".$base;
	$user = USER;
	$pass = PASS;
	try {
		$id = new PDO($dsn,$user,$pass);
		return $id;
	} catch(PDOException $pdoe) {
		//  echo "Echec de la connexion : ",$pdoe->getMessage();
		return FALSE;
		exit();
	}
}
?>
