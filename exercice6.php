##Exercice 6
Faire une fonction qui prend trois paramètres : **nom**, **prenom** et **age**. Elle doit renvoyer une chaine de la forme :  
"Bonjour" + **nom** + **prenom** + ",tu as" + **age** + "ans".

<?php

function coord(){
	$nom="Cadiou";
	$prenom="Odile";
	$age=56;
	
	echo "Bonjour ".$nom." ".$prenom.", tu as ". $age ." ans .";
}
coord();
?>