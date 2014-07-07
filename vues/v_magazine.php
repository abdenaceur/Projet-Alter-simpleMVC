<article class="container text-center header_section">
		 <h2>Montres Alter</h2>
	   </article>
<article class="container contenu_interne">	
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
	</article>
	<article class="container contenu_interne">
     <?php
	   $pdo = PdoMontre::getPdoMontre();
	   $lesProduits = $pdo->getLesProduits();
        foreach( $lesProduits as $unProduit) 
        {
	     $Produit_ID = $unProduit['Produit_ID'];
	     $Produit_Description = $unProduit['Produit_Description'];
	     $Produit_Prix=$unProduit['Produit_Prix'];
	     $Produit_Image1 = $unProduit['Produit_Image1'];
	     $Produit_Image2 = $unProduit['Produit_Image2'];
	     $Produit_Image3 = $unProduit['Produit_Image3'];
	?>	
	  	
       
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 column magazine text-center">
	       <a href='#'>
			<img  class="img-responsive"  src="<?php  echo $Produit_Image1 ?>" alt="image"/>
			</a>
			<div class="producttitle">
			<?php echo $Produit_Description ?></li>
			</div>
			<div class="pricetext">
			 <?php echo "  ".$Produit_Prix."$" ?>
			</div>
			<div class="productprice">
                    <a href="?requete=magazine-detail" ><button type="button"class="btn btn-warning">PLUS DE D&Eacute;TAIL</button>
                    </a>
                </div>
			 <div class="productprice">
			<a href="?requete=ajouter&produit=<?php echo $Produit_ID ?>"> 
			  <button type="button" class="btn btn-success">Ajouter au panier</button>
            </a> 
		   </div>
	     </div>
	     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 column magazine text-center">
	       <a href='#'>
			<img  class="img-responsive"  src="<?php echo $Produit_Image2 ?>" alt="image"/>
			</a>
			<div class="producttitle">
			<?php echo $Produit_Description ?></li>
			</div>
			<div class="pricetext">
			 <?php echo "  ".$Produit_Prix."$" ?>
			</div>
			<div class="productprice">
                    <a href="?requete=magazine-detail" ><button type="button"class="btn btn-warning">PLUS DE D&Eacute;TAIL</button>
                    </a>
                </div>
			 <div class="productprice">
			<a href="?requete=ajouter&produit=<?php echo $Produit_ID ?>"> 
			  <button type="button" class="btn btn-success">Ajouter au panier</button>
            </a> 
		   </div>
	     </div>
		 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 column magazine text-center">
	       <a href='#'>
			<img  class="img-responsive"  src="<?php echo $Produit_Image3 ?>" alt="image"/>
			</a>
			<div class="producttitle">
			<?php echo $Produit_Description ?></li>
			</div>
			<div class="pricetext">
			 <?php echo "  ".$Produit_Prix."$" ?>
			</div>
			<div class="productprice">
                    <a href="?requete=magazine-detail" ><button type="button" class="btn btn-warning">PLUS DE D&Eacute;TAIL</button>
                    </a>
                </div>
			 <div class="productprice">
			<a href="?requete=ajouter&produit=<?php echo $Produit_ID ?>"> 
			  <button type="button" class="btn btn-success">Ajouter au panier</button>
            </a> 
		   </div>
	     </div>
		 <?php
		 }
		 ?>
   </article>	  