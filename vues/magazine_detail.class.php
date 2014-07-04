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


class Magazine_detail {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheMagazineDetail() {
		?>    <!-- Section -->
    <article class="container text-center header_section">
        <h2>MAGAZINE</h2>
    </article>
    <!-- /Section -->
    <!-- Contenu -->
    <article class="container contenu_interne">
        <!-- Images du produit -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center magazine">
            <img src="./img/alter-10-01.jpg" width="100%" class="img-responsive" id="bg">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 magazine produit_mini">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-4">
                <a href="" title="Switch" class="menulink1">
                    <img src="./img/alter-10-01.jpg" width="100%" class="img-responsive">
                </a>
                <p></p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-4">
                <a href="" title="Switch" class="menulink2">
                    <img src="./img/alter-10-02.jpg" width="100%" class="img-responsive">
                </a>
                <p></p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-4">
                <a href="" title="Switch" class="menulink3">
                    <img src="./img/alter-10-03.jpg" width="100%" class="img-responsive">
                </a>
                <p></p>
            </div>
        </div>
        <!-- /Images du produit -->
        <!-- Description de produit -->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 magazine ">
            <h1>Alter Aurora</h1>
            <p></p>
            <p>Nunc vel est sed lacus cursus lacinia. Maecenas feugiat eros id porttitor congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <h2>$219.99</h2>
            <h2></h2>
            <h4>Quantit&eacute; :</h4> 
            <input type="text" class="form-control form_quantite" value="1">
            <h2></h2>
            <a href="#" class="btn btn-danger  btn-sm" role="button"><h5>ACHETER</h5></a>
            <h2></h2>
            <h3>Caract&eacute;ristiques :</h3>
            <ul>
                <li>Aenean ut blandit sem. Integer tempus suscipit consequat.</li>
                <li>Nunc vel est sed lacus cursus lacinia.</li>
                <li>Maecenas feugiat eros id porttitor congue.</li>
                <li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li>
                <li>Duis feugiat malesuada dolor eu ornare.</li>
            </ul>
        </div>
        <!-- /Description de produit -->
    </article>
    <!-- /Contenu -->
    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X');
        ga('send', 'pageview');
         // script pour magazine, magazine détail
        $(function () {
            $('.menulink1').click(function (e) {
                e.preventDefault();
                $("#bg").attr('src', "./img/alter-10-01.jpg");
            });
            $('.menulink2').click(function (e) {
                e.preventDefault();
                $("#bg").attr('src', "./img/alter-10-02.jpg");
            });
            $('.menulink3').click(function (e) {
                e.preventDefault();
                $("#bg").attr('src', "./img/alter-10-03.jpg");
            });
        });
    </script>
		<?php
		
	}
	

}
?>