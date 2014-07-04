<?php
/**
 * Class Vue
 * Template de classe Vue. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */


class Magazine_list {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheMagazineList() {
		?><!-- Section -->
    <article class="container header_section text-center">
            <h2>MAGAZINE</h2>
    </article>
    <!-- /Section -->
    <!-- Contenu -->
    <article class="container contenu_interne">
        <!-- Checkboxes pour filtre -->
        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 pull-down">
            <div class="col-lg-12 col-md-12 col-sm-3 col-xs-6 magazine ">
                <h4>EXTERIOR</h4>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;Classique</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;Sportive</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;Casuel</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;Metal</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp; Cuir</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-3 col-xs-6 magazine">
                <h4>AVANC&Eacute;</h4>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;Hautparleur</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;Camera</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;Microphone</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;Tactile</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-4 col-xs-7 magazine">
                <h4>M&Eacute;MOIRE INTEGR&Eacute;</h4>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;16 GB +</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;8 - 15.9 GB</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;2 - 7.9 GB</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;512 MB - 1.9 GB</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-2 col-xs-5 magazine">
                <h4>PRIX</h4>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;$300 +</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;$500 +</p>
                <p><input type="checkbox" name="filtre" id="filtre" checked>&nbsp;&nbsp;$750 +</p>
            </div>
        </div>
        <!-- /Checkboxes pour filtre -->
        <!-- Liste de produits -->
        <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 column text-center">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
                <a href='#'>
                    <img src="./img/alter-01-01.jpg" width="100%" class="img-responsive">
                </a>
                <div class="producttitle">
                    <h3>Product 1</h3>
                </div>
                <div class="pricetext">
                    <h4>$219.99</h4>
                </div>
                <div class="productprice">
                    <a href="?requete=magazine-detail" class="btn btn-warning  btn-sm" role="button">
                        <h5>D&Eacute;TAIL</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
                <a href='#'>
                    <img src="./img/alter-02-01.jpg" width="100%" class="img-responsive">
                </a>
                <div class="producttitle">
                    <h3>Product 2</h3>
                </div>
                <div class="pricetext">
                    <h4>$219.99</h4>
                </div>
                <div class="productprice">
                    <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                        <h5>D&Eacute;TAIL</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
                <a href='#'>
                    <img src="./img/alter-03-01.jpg" width="100%" class="img-responsive">
                </a>
                <div class="producttitle">
                    <h3>Product 3</h3>
                </div>
                <div class="pricetext">
                    <h4>$219.99</h4>
                </div>
                <div class="productprice">
                    <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                        <h5>D&Eacute;TAIL</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
                <a href='#'>
                    <img src="./img/alter-04-01.jpg" width="100%" class="img-responsive">
                </a>
                <div class="producttitle">
                    <h3>Product 4</h3>
                </div>
                <div class="pricetext">
                    <h4>$219.99</h4>
                </div>
                <div class="productprice">
                    <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                        <h5>D&Eacute;TAIL</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
                <a href='#'>
                    <img src="./img/alter-05-01.jpg" width="100%" class="img-responsive">
                </a>
                <div class="producttitle">
                    <h3>Product 5</h3>
                </div>
                <div class="pricetext">
                    <h4>$219.99</h4>
                </div>
                <div class="productprice">
                    <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                        <h5>D&Eacute;TAIL</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
                <a href='#'>
                    <img src="./img/alter-06-01.jpg" width="100%" class="img-responsive">
                </a>
                <div class="producttitle">
                    <h3>Product 6</h3>
                </div>
                <div class="pricetext">
                    <h4>$219.99</h4>
                </div>
                <div class="productprice">
                    <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                        <h5>D&Eacute;TAIL</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
                <a href='#'>
                    <img src="./img/alter-07-01.jpg" width="100%" class="img-responsive">
                </a>
                <div class="producttitle">
                    <h3>Product 7</h3>
                </div>
                <div class="pricetext">
                    <h4>$219.99</h4>
                </div>
                <div class="productprice">
                    <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                        <h5>D&Eacute;TAIL</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
                <a href='#'>
                    <img src="./img/alter-08-01.jpg" width="100%" class="img-responsive">
                </a>
                <div class="producttitle">
                    <h3>Product 8</h3>
                </div>
                <div class="pricetext">
                    <h4>$219.99</h4>
                </div>
                <div class="productprice">
                    <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                        <h5>D&Eacute;TAIL</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
                <a href='#'>
                    <img src="./img/alter-09-01.jpg" width="100%" class="img-responsive">
                </a>
                <div class="producttitle">
                    <h3>Product 9</h3>
                </div>
                <div class="pricetext">
                    <h4>$219.99</h4>
                </div>
                <div class="productprice">
                    <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                        <h5>D&Eacute;TAIL</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
            <a href='#'>
                <img src="./img/alter-10-01.jpg" width="100%" class="img-responsive">
            </a>
            <div class="producttitle">
                <h3>Product 10</h3>
            </div>
            <div class="pricetext">
                <h4>$219.99</h4>
            </div>
            <div class="productprice">
                <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                    <h5>D&Eacute;TAIL</h5>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
            <a href='#'>
                <img src="./img/alter-11-01.jpg" width="100%" class="img-responsive">
            </a>
            <div class="producttitle">
                <h3>Product 11</h3>
            </div>
            <div class="pricetext">
                <h4>$219.99</h4>
            </div>
            <div class="productprice">
                <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                    <h5>D&Eacute;TAIL</h5>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
            <a href='#'>
                <img src="./img/alter-12-01.jpg" width="100%" class="img-responsive">
            </a>
            <div class="producttitle">
                <h3>Product 12</h3>
            </div>
            <div class="pricetext">
                <h4>$219.99</h4>
            </div>
            <div class="productprice">
                <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                    <h5>D&Eacute;TAIL</h5>
                </a>
            </div>
        </div>
        </div>
        <!-- /Liste de produits -->
    </article>
    <!-- /Contenu -->
		<?php
		
	}
	

}
?>