<?php
include_once("./includes/connexionPDO.inc.php");

class verificationLogin {

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
            self::$instance = new verificationLogin($base, $param);
        }
        return self::$instance;
    }

	function __destruct ()
	{
		
	}
	
		
	public function verification($username,$password)
	{

        $requete = "SELECT * FROM client WHERE Client_Email='$username' AND Client_Mdp='$password'";

        $result  = $this->id->query($requete);
        $tabresult = $result->fetchAll(PDO::FETCH_ASSOC);
        if($tabresult){
            for($i=0;$i<sizeof($tabresult);$i++){
                $_SESSION['ClientID'] = $tabresult[$i]['Client_ID'];
                $_SESSION['ClientEmail'] = $tabresult[$i]['Client_Email'];
                $_SESSION['ClientNom'] = $tabresult[$i]['Client_Nom'];


            }
            return true;
        }else{
            return false;
        }
    }
}




?>