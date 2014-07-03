<?php
// appelle au connexion de BD
include_once("./includes/connexionPDO.inc.php");
// generarion du class Produits appellé du fichier vue/magazine_list.class.php
class Produits {
    private static $instance = null;
    private $id;
    // le constructeur prends la connexion et lui donne des parametres obtenus en vue/magazine_list.class.php, ligne 4
    private function __construct($base, $param) {
        $this->id = connexionPDO($base,$param);
        if (!$this->id) {
            throw new Exception("Connexion Impossible à la base de données : ".HOST);
        }
    }
	//retourne une instance de la classe
    public static function getInstance($base, $param) {
        if(is_null(self::$instance)) {
            self::$instance = new Produits($base, $param);
        }
        return self::$instance;
    }
    // destructeur de la classe
	function __destruct (){}
    // method pour obtenir le filtre de styles de produit gardé dedans la BD. page vue/magazine_list.class.php
	public function obtenir_style() 
	{
            echo "<h4>STYLE</h4>";
             $reqMysql = "SELECT DISTINCT produit_style  FROM produit";
             $resultats= $this->id->query($reqMysql);
            $cats = array();
             while($ligne = $resultats->fetch()) {
                 foreach ($ligne as $key => $value){ $cats[] = $value;} 
             }
            $cats = array_unique($cats);
            foreach ($cats as $key => $value) 
                {  echo '<p><input type="checkbox" name="filtre" id="filtre" value="'.$value.'">&nbsp;&nbsp;'.ucfirst($value).'</p>';} 
    }
    // method pour obtenir le filtre de materiels du produit gardé dedans la BD. page vue/magazine_list.class.php
    public function obtenir_materiels() 
	{
            echo "<h4>MATERIEL</h4>";
             $reqMysql = "SELECT DISTINCT produit_materiel  FROM produit";
             $resultats= $this->id->query($reqMysql);
            $cats = array();
             while($ligne = $resultats->fetch()) {
                 foreach ($ligne as $key => $value){ $cats[] = $value;} 
             }
            $cats = array_unique($cats);
            foreach ($cats as $key => $value) 
                { 
                    echo '<p><input type="checkbox" name="filtre" id="filtre" value="'.$value.'">&nbsp;&nbsp;'.ucfirst($value).'</p>';
                } 
    }
    // method pour obtenir le filtre de specifications du produit gardé dedans la BD. page vue/magazine_list.class.php
    public function obtenir_specifications() 
	{
        echo "<h4>AVANCÉ</h4>";
        $cats = array("hautparleur","camera","microphone","tactile");
        foreach ($cats as $value) 
        { 
            echo '<p><input type="checkbox" name="filtre" id="filtre" value="'.$value.'">&nbsp;&nbsp;'.ucfirst($value).'</p>';
        } 
    }
    // method pour obtenir le filtre de materiels du produit gardé dedans la BD. page vue/magazine_list.class.php
    public function obtenir_prix() 
	{
        echo "<h4>PRIX</h4>";
        $reqMysql = "SELECT DISTINCT produit_prix  FROM produit";
        $resultats= $this->id->query($reqMysql);
        while($ligne = $resultats->fetch()) {
            foreach ($ligne as $key => $value){ $prix[] = $value;} 
        }
        $prix_max = max($prix);
        $prix1 = min($prix);
        $prix2 = round((30*$prix_max)/100, 0, PHP_ROUND_HALF_DOWN);
        $prix3 = round((60*$prix_max)/100, 0, PHP_ROUND_HALF_DOWN);
        $prix4 = round((75*$prix_max)/100, 0, PHP_ROUND_HALF_DOWN);
        $prix = array( $prix1, $prix2, $prix3, $prix4);
        foreach ($prix as $value) 
        { 
            echo '<p><input type="checkbox" name="filtre" id="filtre" value="'.$value.'">&nbsp;&nbsp;$'.$value.'&nbsp;+</p>';
        } 
    }
    public function obtenir_produits() 
	{
        $reqMysql = "SELECT * FROM produit";
        $resultats=$this->id->query($reqMysql);
        while($ligne = $resultats->fetchObject()) {
            $produit_image1 = $ligne->Produit_Image1;
            $produit_nom = strtoupper($ligne->Produit_Nom);
			$produit_id = $ligne->Produit_ID;
            $produit_prix = $ligne->Produit_Prix;
            $produit_style = $ligne->produit_style;
            $produit_materiel = $ligne->produit_materiel;
            $produit_os = $ligne->Produit_OS;
            if ($ligne->Produit_Hautparleur){$produit_hautparleur = 'hautparleur';} else $produit_hautparleur = '';
            if ($ligne->Produit_Microphone){$produit_microphone = 'microphone ';} else $produit_microphone = '';
            if ($ligne->Produit_Camera){$produit_camera = 'camera';} else $produit_camera = '';
            if ($ligne->Produit_TouchScreen){$produit_touchScreen = 'touchScreen';} else $produit_touchScreen = '';
            echo (' <div class="
                                col-lg-4 col-md-4 col-sm-6 col-xs-12
                                column magazine text-center '
                                .$produit_style.' '
                                .$produit_materiel.' '
                                .$produit_os.' '
                                .$produit_touchScreen.' '
                                .$produit_microphone.' '
                                .$produit_hautparleur.'
                                ">
                <a href="?requete=magazine-detail&id='.$produit_id.'">
                    <img src="./img/'.$produit_image1.'.jpg" width="100%" class="img-responsive">
                </a>
                <div class="producttitle">
                    <h3>'.$produit_nom.'</h3>
                </div>
                <div class="pricetext">
                    <h4>$'.$produit_prix.'</h4>
                </div>
                <div class="productprice">
                    <a href="?requete=magazine-detail&id='.$produit_id.'" class="btn btn-warning  btn-sm" role="button">
                        <h5>D&Eacute;TAIL</h5>
                    </a>
                </div>
            </div>');
        }
	}
	public function obtenir_produit_detail($id) 
	{
        $reqMysql = "SELECT * FROM produit WHERE Produit_ID LIKE ".$id;
        $resultats=$this->id->query($reqMysql);
        while($ligne = $resultats->fetchObject()) {
			$produit_id = $ligne->Produit_ID;
			$produit_nom = strtoupper($ligne->Produit_Nom);
            $produit_image1 = $ligne->Produit_Image1;
			$produit_image2 = $ligne->Produit_Image2;
			$produit_image3 = $ligne->Produit_Image3;
			$produit_description = $ligne->Produit_Description;
            $produit_prix = $ligne->Produit_Prix;
            $produit_style = ucfirst($ligne->produit_style);
            $produit_materiel = ucfirst($ligne->produit_materiel);
			$produit_coleur = ucfirst($ligne->Produit_Couleur);
			$produit_poids = $ligne->Produit_Poids;
			$produit_longeur = $ligne->Produit_Longeur;
			$produit_largeur = $ligne->Produit_Largeur;
            $produit_os = strtoupper($ligne->Produit_OS);
			$produit_resolution = $ligne->Produit_ResolutionEcran;
			if ($ligne->Produit_Hautparleur){$produit_hautparleur = '<li>Hautparleur</li>';} else $produit_hautparleur = '';
            if ($ligne->Produit_Microphone){$produit_microphone = '<li>Microphone</li>';} else $produit_microphone = '';
            if ($ligne->Produit_Camera){$produit_camera = '<li>Camera</li>';} else $produit_camera = '';
            if ($ligne->Produit_TouchScreen){$produit_touchScreen = '<li>TouchScreen</li>';} else $produit_touchScreen = '';
			// Publication du contenu de la page
			echo ('
					<!-- Images du produit -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center magazine">
						<img src="./img/'.$produit_image1.'.jpg" width="100%" class="img-responsive" id="bg">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 magazine produit_mini">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-4">
							<a href="" title="Switch" class="menulink1">
								<img src="./img/'.$produit_image1.'.jpg" width="100%" class="img-responsive">
							</a>
							<p></p>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-4">
							<a href="" title="Switch" class="menulink2">
								<img src="./img/'.$produit_image2.'.jpg" width="100%" class="img-responsive">
							</a>
							<p></p>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-4">
							<a href="" title="Switch" class="menulink3">
								<img src="./img/'.$produit_image3.'.jpg" width="100%" class="img-responsive">
							</a>
							<p></p>
						</div>
					</div>
					<!-- /Images du produit -->
					<!-- Description de produit -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 magazine ">
						<h1>'.$produit_nom.'</h1>
						<p></p>
						<p>'.$produit_description.'</p>
						<h2>$'.$produit_prix.'</h2>
						<h2></h2>
						<h4>Quantit&eacute; :</h4> 
						<input type="text" class="form-control form_quantite" value="1">
						<h2></h2>
						<a href="#" class="btn btn-danger  btn-sm" role="button"><h5>ACHETER</h5></a>
						<h2></h2>
						<h3>Caract&eacute;ristiques :</h3>
						<ul>
							<li>Style : '.$produit_style.'</li>
							<li>Materiel : '.$produit_materiel.'</li>
							<li>Couleur : '.$produit_coleur.'</li>
							<li>Poids : '.$produit_poids.' grms</li>
							<li>Longeur : '.$produit_longeur.' mms</li>
							<li>Largeur : '.$produit_largeur.' cms</li>
							<li>OS : '.$produit_os.'</li>
							<li>Resolution : '.utf8_encode($produit_resolution).'</li>'
							.$produit_hautparleur
				  			.$produit_microphone
				  			.$produit_camera
				  			.$produit_touchScreen.
				  		'</ul>
					</div>
					<!-- /Description de produit -->
					<script>
						 // script pour magazine, magazine détail
						$(function () {
							$(".menulink1").click(function (e) {
								e.preventDefault();
								$("#bg").attr("src", "./img/'.$produit_image1.'.jpg");
							});
							$(".menulink2").click(function (e) {
								e.preventDefault();
								$("#bg").attr("src", "./img/'.$produit_image2.'.jpg");
							});
							$(".menulink3").click(function (e) {
								e.preventDefault();
								$("#bg").attr("src", "./img/'.$produit_image3.'.jpg");
							});
						});
					</script>
			');
        }
	}
	
    
}
?>