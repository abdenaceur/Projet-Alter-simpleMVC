<article class="container text-center header_section">
		 <h2>VOTRE PANIER</h2>
</article>
<article class="container contenu_interne">	
<?php

   foreach( $lesProduitsDuPanier as $unProduit)
       {
	    $Produit_ID = $unProduit['Produit_ID'];
	    $Produit_Description = $unProduit['Produit_Description'];
	    $Produit_Prix=$unProduit['Produit_Prix'];
	    $Produit_Image1 = $unProduit['Produit_Image1'];
		$Produit_Nom = $unProduit['Produit_Nom'];
	
?>
	
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column magazine text-center">
	     <ul class="noTextdeco">
			<li><img  class="img-responsive" src="img/<?php echo $Produit_Image1  ?>.jpg" alt="image"/></li>

             <li><?php echo $Produit_Nom ?></li>


			<li><?php echo "  ".$Produit_Prix."$" ?></li>
	        <li><a href="?requete=supprimer&produit=<?php echo $Produit_ID ?>">
	        <button type="button" class="btn btn-success">Retirer du panier</button></li></a> 
		 </ul>
	  </div>
	  <?php
		 }
		 ?>
	  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 column magazine text-center">
        <div class="col-md-6 .col-md-offset-3">
          <a href="?requete="><button type="button" class="btn btn-success ">PASSER À LA CAISSE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</button></a>
		</div>
	    <div class="col-md-6 .col-md-offset-3">
          <a href="?requete=magazine"><button type="button" class="btn btn-danger ">CONTINUER À MAGASINER   </button></a>
        </div>
	 </div>
</article>
    