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
	
		/**
		 * Traite la requête
		 * @return void
		 */
		public function gerer()
		{
			
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
                
				default:
					$this->accueil();
					break;
			}
		}
    
    
		private function accueil()
		{
			$oVue = new acceuil();
			$oVue->afficheAccueil();
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
        private function magazine()
		{
			$oVue = new Magazine_list();
			$oVue->afficheMagazineList();
		}
        private function magazine_detail()
		{
			$oVue = new Magazine_detail();
			$oVue->afficheMagazineDetail();
		}
    
    private function formulaire()
		{
			$oVue = new Formulaire();
			$oVue->afficheFormulaire();
		}
        private function login()
		{
			$oVue = new Login();
			$oVue->afficheLogin();
		}
        private function panier()
		{
			$oVue = new panier();
			$oVue->affichePanier();
		}
        private function produit()
		{
			$oVue = new produit();
			$oVue->afficheProduit();
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
    private function faq()
		{
			$oVue = new faq();
			$oVue->afficheFaq();
		}
    private function politique_conf()
		{
			$oVue = new politique_conf();
			$oVue->affichePolitique_conf();
		}
		// Placer les méthodes du controleur.
		
		
}
?>















