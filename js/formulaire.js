window.addEventListener('load', init);

	function init() {
		var target = document.getElementById('button');
		target.addEventListener('click', formValidation);
	}

	function formValidation() {
		//expressions rationnelles pour les champs à valider
		var patternNomPrenom	= 	/^[a-zA-ZéèêëÉÈÊËç .'-]{2,}$/;
		var patternAdresse 		= 	/^[0-9]{1,6} [1-9]?[a-zA-ZéèêëÉÈÊËç .'-]{2,}$/;
		var patternVille 		= 	/^[a-zA-ZéèêëÉÈÊËç .'-]{2,}$/;
		var patternCode 		= 	/^[a-zA-Z]{1}\d{1}[a-zA-Z]{1} *\d{1}[a-zA-Z]{1}\d{1}$/;
		var patternTelephone 	= 	/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
		var patternCourriel 	= 	/^[-!#$%&'*+\/0-9=?A-Z^_a-z{|}~](\.?[-!#$%&'*+\/0-9=?A-Z^_a-z{|}~])*@[a-zA-Z](-?[a-zA-Z0-9])*(\.[a-zA-Z](-?[a-zA-Z0-9])*)+$/;											
		var patternMotdePasse 	= 	/^[a-zA-Z0-9!@#$%^&*]{6,16}$/; //^?=.*[0-9])(?=.*[!@#$%^&*])([a-zA-Z0-9!@#$%^&*]{6,16}$

		//champs à valider
		var nom 		=  	document.getElementById('nom');
		var prenom 		= 	document.getElementById('prenom');
		var groupSex	=	document.getElementsByName('sexe');
		var sexe 		= 	document.getElementById('femme');
		var adresse		= 	document.getElementById('adresse');
		var ville 		= 	document.getElementById('ville');
		var province 	= 	document.getElementById('province');
		var code 		= 	document.getElementById('code');
		var telephone 	= 	document.getElementById('telephone');
		var courriel 	= 	document.getElementById('courriel');
		var mdp1 		= 	document.getElementById('mdp1');
		var mdp2 		= 	document.getElementById('mdp2');
		//liste des sections du formulaire
		var divList 	= 	document.querySelectorAll("div.form-group");	
		
		var choixSexe;
		var choixProvince;	
			
		//valider nom
		if(validerChamp(nom.value, patternNomPrenom)) {
			nom.setCustomValidity("");
			divList[0].className = "form-group has-success";
			prenom.setCustomValidity("Ce champ est obligatoire");
		} else {
			afficherMsgErreur(nom, divList[0]);
		}
	
		//valider prénom
		if(validerChamp(prenom.value, patternNomPrenom)) {
			prenom.setCustomValidity("");
			divList[1].className = "form-group has-success";
			sexe.setCustomValidity("Vouz devez faire un choix");

		} else {
			afficherMsgErreur(prenom, divList[1]);
		}

		//valider sexe
		if (groupSex) {
			divList[2].className = "form-group has-error";
			for(i = 0; i < groupSex.length; i++) {
				if(groupSex[i].checked) {
					choixSexe = groupSex[i].value;
					sexe.setCustomValidity("");
					divList[2].className = "form-group has-success";
					adresse.setCustomValidity("Saisissez votre adresse");
					break;
				} 
			}
		}

		//valider adresse
		if(validerChamp(adresse.value, patternAdresse)) {
			adresse.setCustomValidity("");
			divList[3].className = "form-group has-success";
			ville.setCustomValidity("Saisissez votre ville");

		} else {
			afficherMsgErreur(adresse, divList[3]);
		}

		//valider ville
		if(validerChamp(ville.value, patternVille)) {
			ville.setCustomValidity("");
			divList[4].className = "form-group has-success";
			province.setCustomValidity("Vouz devez faire un choix");
		} else {
			afficherMsgErreur(ville, divList[4]);
		}

		//valider province
		if(province.options[province.selectedIndex].value != "Sélection") {
			choixProvince = province.options[province.selectedIndex].value;
			province.setCustomValidity("");
			divList[5].className = "form-group has-success";
			code.setCustomValidity("Saisissez votre code postal");
		} else {
			divList[5].className = "form-group has-error";
		}
		
		//valider code postal
		if(validerChamp(code.value, patternCode)) {
			code.setCustomValidity("");
			divList[6].className = "form-group has-success";
			telephone.setCustomValidity("Saisissez votre numéro de tétéphone");
		} else {
			afficherMsgErreur(code, divList[6]);
		}

		//valider téléphone
		if(validerChamp(telephone.value, patternTelephone)) {
			telephone.setCustomValidity("");
			divList[7].className = "form-group has-success";
			courriel.setCustomValidity("Saisissez votre courriel");
		} else {
			afficherMsgErreur(telephone, divList[7]);
		}

		//valider courriel
		if(validerChamp(courriel.value, patternCourriel)) {
			courriel.setCustomValidity("");
			divList[8].className = "form-group has-success";
			mdp1.setCustomValidity("Saisissez votre mot de passe");
		} else {
			afficherMsgErreur(courriel, divList[8]);
		}

		//valider mot de passe
		if(validerChamp(mdp1.value, patternMotdePasse)) {
			mdp1.setCustomValidity("");
			divList[9].className = "form-group has-success";
			mdp2.setCustomValidity("Confirmez votre mot de passe");
		} else {
			afficherMsgErreur(mdp1, divList[9]);
		}

		//vérification de la similarité des mots de passe
		if(mdp2.value != "") {
			if(mdp1.value == mdp2.value) {
				mdp2.setCustomValidity("");	
			} else {
				mdp2.setCustomValidity("Les mots de passe doivent être identiques");
			}	
		} else {
			afficherMsgErreur(mdp2, divList[10]);
		}			
	}

	//vérifie le statut des champs 
	function validerChamp(valeur, pattern) {
		var result;
		(pattern.test(valeur))? result = true :  result = false;
		return result;
	}
	//gère les actions en cas d'erreurs 
	function afficherMsgErreur(element, div) {
		if(element.value == "") {
				div.className = "form-group has-error";
				element.setCustomValidity("Ce champ est obligatoire");
			} 	else {
					 div.className = "form-group has-error";
					 element.setCustomValidity("Saisissez l'information à nouveau");
			  }
	}