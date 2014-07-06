<?php
/**
 * Class Controler
 * Gère les requêtes HTTP
 *
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-10
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 *
 */

class Controler
{

    public function gererAdmin()

    {

            if(isset($_GET['section'])){
                switch ($_GET['section']) {
                    case 'adminLoginConf':
                        $this->adminLoginConf();
                        break;
                    case 'adminLogin':
                        $this->adminLogin();
                        break;
                    case 'adminResultatRechecheClient':
                        $this->adminResultatRechercheClient();
                        break;
                    case 'adminAcceuil':
                        $this->adminAccueil();
                        break;
                    case 'adminLogout':
                        $this->adminLogout();
                        break;
                    case 'adminClientAjouter':
                        $this->adminClientAjouter();
                        break;
                    case 'adminClientModifierEffacer':
                        $this->adminClientModifierEffacer();
                        break;
                    case 'adminClientRechercher':
                        $this->adminClientRechercher();
                        break;
                    case 'adminMiseEnPage':
                        $this->adminMiseEnPage();
                        break;
                    case 'adminProduitAjouter':
                        $this->adminProduitAjouter();
                        break;
                    case 'adminProduitRechercher':
                        $this->adminProduitRechercher();
                        break;
                    case 'adminProduitModifierEffacer':
                        $this->adminProduitModifierEffacer();
                        break;
                    case 'adminStatistique':
                        $this->adminStatistique();
                        break;
                    case 'adminCreerClient':
                        $this->adminCreerClient();
                        break;
                    case 'adminModificationClient':
                        $this->adminModificationClient();
                        break;
                    case 'adminEffacerClient':
                        $this->adminEffacerClient();
                        break;
                    case 'adminModificationClientConfirmation':
                        $this->adminModificationClientConfirmation();
                        break;
                    case 'adminCreerProduit':
                        $this->adminCreerProduit();
                        break;

                    default:
                        $this->adminLogin();
                        break;
                }
            }else{
                $this->adminLogin();
            }
        }


    private function adminCreerProduit()
    {
        $creerProduitModule = insertProduit::getInstance('alterdb','dbconnect');
        $confirmationCreerProduit = $creerProduitModule->insertProduit();
        if($confirmationCreerProduit){
            $oVue = new adminCreerProduitReponse();
            $oVue->afficheAdminCreerProduitBonneReponse();
        }else{
            $oVue = new adminCreerProduitReponse();
            $oVue->afficheAdminCreerProduitPasReponse();
        }
    }


    private function adminLoginConf(){
        $username=$_POST['nomUtilisateur'];
        $password=$_POST['mdp'];
        $verificationModule = verificationLoginAdmin::getInstance('alterdb','dbconnect');
        $verificationUsername = $verificationModule->verificationAdmin($username,$password);
        if($verificationUsername){
            $oVue=new adminLogin();
            $oVue->afficheLoginAdminReussite();

        }else{
            $oVue=new adminLogin();
            $oVue->afficheLoginAdminEchouer();
        }
    }

    private function adminResultatRechercheClient()
    {
        $instanceRecherche = adminRechercheClient::getInstance('alterdb','dbconnect');
        $resultatClient = $instanceRecherche->rechercheClient();

        if($resultatClient){
            $oVue = new adminResultatRecherche();
            $oVue->afficheAdminResultatRecherche($resultatClient);
        }

    }

    private function adminLogout()
    {
        session_destroy();
        $oVue = new adminLogin();
        $oVue->afficheAdminLogin();
    }

    private function adminLogin()
    {
        $oVue = new adminLogin();
        $oVue->afficheAdminLogin();
    }

    private function adminAccueil()
    {
        $oVue = new adminAcceuil();
        $oVue->afficheAdminAcceuil();
    }

    private function adminClientAjouter()
    {
        $oVue = new adminClientAjouter();
        $oVue->afficheAdminClientAjouter();
    }

    private function adminClientModifierEffacer()
    {
        $oVue = new adminClientModifierEffacer();
        $oVue->afficheAdminClientModifierEffacer();
    }
    private function adminClientRechercher()
    {
        $oVue = new adminClientRechercher();
        $oVue->afficheAdminClientRechercher();
    }
    private function adminMiseEnPage()
    {
        $oVue = new adminMiseEnPage();
        $oVue->afficheMiseEnPage();
    }
    private function adminProduitAjouter()
    {
        $oVue = new adminProduitAjouter();
        $oVue->afficheAdminProduitAjouter();
    }
    private function adminProduitModifierEffacer()
    {
        $oVue = new adminProduitModifierEffacer();
        $oVue->afficheAdminProduitModifierEffacer();
    }
    private function adminStatistique()
    {
        $oVue = new adminStatistique();
        $oVue->afficheAdminStatistique();
    }

    private function adminProduitRechercher()

    {
        $oVue = new adminProduitRechercher();
        $oVue->afficheAdminProduitRechercher();
    }

    private function adminCreerClient()
    {
        $creerClientModule = insertClient::getInstance('alterdb','dbconnect');
        $confirmationCreerClient = $creerClientModule->insertClient();
        if($confirmationCreerClient){
            $oVue = new adminCreerClientReponse();
            $oVue->afficheAdminCreerClientBonneReponse();
        }else{
        $oVue = new adminCreerClientReponse();
        $oVue->afficheAdminCreerClientPasReponse();
        }
    }

    private function adminModificationClient()

    {
        $informationClientConnection = modeleInformationClient::getInstance('alterdb','dbconnect');
        $informationClient = $informationClientConnection->getInformationClient();

        //Apelle du modele qui va checher les informations
        $oVue = new adminModificationClient();
        $oVue->afficheAdminModificationClient($informationClient);
    }

    private function adminEffacerClient()
    {
        $effacerClientConnection = modeleEffacerClient::getInstance('alterdb','dbconnect');
        //Apelle du modele qui va checher les informations
        $effacerClientConfirmation = $effacerClientConnection->effacerClient();
        $oVue = new adminClientEffacerConfirmation();
        if($effacerClientConfirmation)
            {
                $oVue->afficheAdminEffacerClientBonneReponse();
            }
        else
            {
                $oVue->afficheAdminEffacerClientMauvaiseReponse();
            }
    }

    private function adminModificationClientConfirmation()
    {
        $modificationClientConnection = modeleInformationClient::getInstance('alterdb','dbconnect');
        $modificationClient = $modificationClientConnection->setInformationClient();
        if($modificationClient){


        $oVue = new adminModificationClientConfirmation();
        $oVue->afficheAdminModificationClientConfirmation();
        }else{
            $oVue = new adminModificationClientConfirmation();
            $oVue->afficheAdminModificationClientEchec();
            }
        }


    public function gerer()
    {
        //Si POST recu est le POST du login traitement
        if (isset($_POST['exampleInputPassword1'])&&isset($_POST['exampleInputEmail1'])){
            $this->loginClient();

        }else{
            switch ($_GET['requete']) {
                case 'accueil':
                    $this->accueil();
                    break;
                case 'magazine':
                    $this->magazine();
                    break;
                case 'panier':
                    $this->panier();
                    break;
                case 'plandusite':
                    $this->plandusite();
                    break;
                case 'politiqueretour':
                    $this->politiqueretour();
                    break;
                case 'magazine':
                    $this->magazine();
                    break;
                case 'produit':
                    $this->produit();
                    break;
                case 'magazine-detail':
                    $this->magazine_detail();
                    break;
                case 'login':
                    $this->login();
                    break;
                case 'info_exp':
                    $this->info_exp();
                    break;
                case 'apropos':
                    $this->apropos();
                    break;
                case 'contact':
                    $this->contact();
                    break;
                case 'formulaire':
                    $this->formulaire();
                    break;
                case 'faq':
                    $this->faq();
                    break;
                case 'politiqueconfidentialite':
                    $this->politique_conf();
                    break;
                case 'loginClient':
                    $this->loginClient();
                    break;
                case 'logout':
                    $this->logout();
                    break;

                default:
                    $this->accueil();
                    break;
            }
        }
    }

    private function loginClient()
    {
        //Apele du module qui verifier username et password
        $username=$_POST['exampleInputEmail1'];
        $password=$_POST['exampleInputPassword1'];
        $verificationModule = verificationLogin::getInstance('alterdb','dbconnect');
        $verificationUsername = $verificationModule->verification($username,$password);
        if($verificationUsername){
            $oVue=new loginClient();
            $oVue->afficheLoginReussite();
        }else{
            $oVue=new loginClient();
            $oVue->afficheLoginEchouer();
        }
    }

    private function accueil()
    {
        $oVue = new acceuil();
        $oVue->afficheAccueil();
    }

    private function magazine()
    {
        $oVue = new Magazine_list();
        $oVue->afficheMagazineList();
    }

    private function panier()
    {
        $oVue = new panier();
        $oVue->affichePanier();
    }

    private function plandusite()
    {
        $oVue = new plandusite();
        $oVue->affichePlanDuSite();
    }

    private function politiqueretour()
    {
        $oVue = new politiqueretour();
        $oVue->affichePolitiqueRetour();
    }

    private function produit()
    {
        $oVue = new produit();
        $oVue->afficheProduit();
    }

    private function magazine_detail()
    {
        $oVue = new Magazine_detail();
        $oVue->afficheMagazineDetail();
    }

    private function login()
    {
        $oVue = new Login();
        $oVue->afficheLogin();
    }

    private function info_exp()
    {
        $oVue = new Info_expedition();
        $oVue->afficheInfoExpedition();
    }

    private function apropos()
    {
        $oVue = new apropos();
        $oVue->afficheApropos();
    }

    private function contact()
    {
        $oVue = new contact();
        $oVue->afficheContact();
    }

    private function formulaire()
    {
        $oVue = new Formulaire();
        $oVue->afficheFormulaire();
    }

    private function faq()
    {
        $oVue = new faq();
        $oVue->afficheFaq();
    }
    // Placer les méthodes du controleur.

    private function politique_conf()
    {
        $oVue = new politique_conf();
        $oVue->affichePolitique_conf();
    }

    private function logout()
    {
        $oVue = new Logout();
        $oVue->afficheLogout();
    }

}
?>















