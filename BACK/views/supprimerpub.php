<?PHP
include "../core/pubC.php";
$pubC=new pubC();
if (isset($_POST["Nomduproduit"])){
	$pubC->supprimerpub($_POST["Nomduproduit"]);
	header('Location: afficherpub.php');
}

?>