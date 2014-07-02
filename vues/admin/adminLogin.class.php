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


class AdminLogin {

    /**
     * Affiche la page d'accueil
     * @access public
     *
     */

    public function afficheAdminLogin() {
        ?>
        <?php
        if(isset($_SESSION['AdminID'])){
            header('location:?requete=admin&section=adminAcceuil');
        }
        ?>
        <main>
            <article class="conteneur">
                <article class="login">
                    <h2 class="titreLogin">Connection</h2>
                    <form name="loginAdmin" method="POST" action="index.php?requete=admin&section=adminLoginConf">
                        <label>Nom utilisateur:</label></br><input type="text" name="nomUtilisateur" id="nomUtilisateur"></br>
                        <label>Mot de passe:</label></br><input type="text" name="mdp" id="mdp"></br>
                        <input type="submit" id="submit">
                    </form>
                </article>
            </article>
        </main>
    <?php
    }

    public function afficheLoginAdminEchouer(){
        ?>
        <main>
            <article class="conteneur">
                <article class="login">
                    <h2 class="titreLogin">Connection</h2>
                    <h3 class="titreLogin erreur">Mauvais mots de passe ou email</h3>
                    <form name="loginAdmin" method="POST" action="index.php?requete=admin&section=adminLogin">
                        <label>Nom utilisateur:</label></br><input type="text" name="nomUtilisateur" id="nomUtilisateur"></br>
                        <label>Mot de passe:</label></br><input type="text" name="mdp" id="mdp"></br>
                        <input type="submit" id="submit">
                    </form>
                </article>
            </article>
        </main>
    <?php
    }

    public function afficheLoginAdminReussite(){
        header('location:index.php?requete=admin&section=adminAcceuil');

    }
}
?>