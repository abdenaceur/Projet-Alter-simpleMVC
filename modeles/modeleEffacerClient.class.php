<?php
include_once("./includes/connexionPDO.inc.php");

class modeleEffacerClient {

    private static $instance = null;
    private $id;

    private function __construct($base, $param) {
        $this->id = connexionPDO($base,$param);
        if (!$this->id) {
            throw new Exception("Connexion Impossible à la base de données : ".HOST);
        }
    }

    //retourne une instance de la classe
    public static function getInstance($base, $param) {
        if(is_null(self::$instance)) {
            self::$instance = new modeleEffacerClient($base, $param);
        }
        return self::$instance;
    }

	function __destruct ()
	{
		
	}
	
		
	public function effacerClient()
	{

        $insert1 = "DELETE FROM client WHERE Client_ID='".$_GET['clientid']."'";

        $result1  = $this->id->query($insert1);
        return $result1;

    }
}




?>