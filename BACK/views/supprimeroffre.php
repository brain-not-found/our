<?PHP
include "../core/offreC.php";
$offreC=new offreC();
if (isset($_POST["Nomduproduit"])){
	$offreC->supprimeroffre($_POST["Nomduproduit"]);
	header('Location: afficheroffre.php');
}

?>