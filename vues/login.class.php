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


class login {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheLogin() {
		?>
    <!-- Section -->
    <article class="container text-center header_section">
        <h2>SE CONNECTER</h2>
    </article>
    <!-- /Section -->
    <!-- Contenu -->
    <article class="container inscription_page">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12">

            </div>
            <div class="col-lg-8 col-md-8 col-sm-10col-xs-12 container contenu_interne">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form id="loginUtilisateur" name="loginUtilisateur" action="index.php" method="post">
                        <div class="form-group">
                            <h3>Se connecter</h3>
                            <label for="exampleInputEmail1">Courriel</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" autofocus placeholder="Courriel">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Mot de passe">
                            <button type="submit" id="btn_connect" class="btn btn-default">Se connecter</button>
                    </form>
                            <br />
                            <br />
                    <form role="form" id="oublieMotsDePasse" action="?requete=oublieMotsDePasse">

                            <h4>Vous avez oublié votre mot de passe?</h4>
                            <p>Inscrivez votre adresse courriel ci-dessous pour réinitialiser votre mot de passe. Votre nouveau mot de passe temporaire vous sera envoyé par courriel.</p>
                            <label for="exampleInputEmail1">Courriel</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Courriel">
                            <button type="submit" id="btn_reset" class="btn btn-default">Envoyer</button>
                            <br />
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3>S'inscrire</h3>
                    <p>Sivous n'êtes pas déjà inscrit, cliquer sur le bouton et compléter le formulaire afin de bénéficier des promotions et de commander vos produits en toute tranquilité</p>
                    <button type="submit" id="btn_form" class="btn btn-default">S'inscrire</button>
                    <br />
                    <br />
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12">

            </div>

        </div>

    </article>
    <!-- /Contenu -->
		<?php
		
	}
	

}
?>