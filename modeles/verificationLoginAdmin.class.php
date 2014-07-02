<?php
include_once("./includes/connexionPDO.inc.php");

class verificationLoginAdmin {

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
            self::$instance = new verificationLoginAdmin($base, $param);
        }
        return self::$instance;
    }

	function __destruct ()
	{
		
	}

	public function verificationAdmin($username,$password)
	{
        $requete = "SELECT * FROM admin WHERE adminUtilisateur='$username' AND adminMdp='$password'";
        $result  = $this->id->query($requete);
        print_r($result);
        $tabresult = $result->fetchAll(PDO::FETCH_ASSOC);
        if($tabresult){
            for($i=0;$i<sizeof($tabresult);$i++){
                $_SESSION['AdminID'] = $tabresult[$i]['adminID'];
                $_SESSION['AdminUtilisateur'] = $tabresult[$i]['adminUtilisateur'];
            }
            return true;
        }else{
            return false;
        }
    }
}
?>