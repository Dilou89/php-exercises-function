##Exercice 7
Faire une fonction qui prend deux paramètres : **age** et **genre**. Le paramètre **genre** peut prendre comme valeur :
- Homme
- Femme  

La fonction doit renvoyer en fonction des paramètres :
- **Vous êtes un homme et vous êtes majeur**
- **Vous êtes un homme et vous êtes mineur**
- **Vous êtes une femme et vous êtes majeur**
- **Vous êtes une femme et vous êtes mineur**

Gérer tous les cas.
<?php 
function inscr(){
	$genre="femme";
	$age=8	;
	if(($genre=="femme") &&($age>=18)){
		echo "Vous êtes une femme et vous êtes majeure";
	}
	if(($genre=="femme") &&($age<18)){
		echo "Vous êtes une femme et vous êtes mineure";
	}
	if(($genre=="homme") &&($age>=18)){
		echo "Vous êtes un homme et vous êtes majeur";
	}
	if(($genre=="homme") &&($age<18)){
		echo "Vous êtes un homme et vous êtes mineur";
	}
}

inscr();




?>