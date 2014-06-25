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
                
                case 'plandusite':
					$this->plandusite();
					break;
                
                case 'politiqueretour':
					$this->politiqueretour();
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
			$oVue = new magazine();
			$oVue->afficheMagazine();
		}
    
    
		// Placer les méthodes du controleur.
		
		
}
?>















