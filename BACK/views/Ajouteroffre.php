<?PHP


include "../entities/offre.php";
include "../core/offreC.php";

if ((isset($_POST['Nomduproduit']) and isset($_POST['Prix'])) and (isset($_POST['Reduction']) and isset($_POST['Ladescription']))){
$offreC1=new offre($_POST['Nomduproduit'],$_POST['Prix'],$_POST['Reduction'],$_POST['Ladescription']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$offreC2=new offreC();
$offreC2->ajouteroffre($offreC1);
header('Location: afficheroffre.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>