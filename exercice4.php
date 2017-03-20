##Exercice 4
Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
- **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième
- **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième
- **Les deux nombres sont identiques** si les deux nombres sont égaux

<?php
$x=5;
$y=10;
function comp($x,$y){
	
	
	if($x<$y){
		echo "Le premier nombre est plus petit";
	}
	if($x>$y){
		echo "Le premier nombre est plus grand";
	}
	if($x==$y){
		echo "Les deux nombres sont identiques";
	}

}
comp($x,$y);



?>