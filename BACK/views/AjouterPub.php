<?PHP
include "../entities/pub.php";
include "../core/pubC.php";

if ((isset($_POST['Nomduproduit']) and isset($_POST['Referenceduproduit'])) and (isset($_POST['Prix']) and isset($_POST['Ladescription']))){
$pubC1=new pub($_POST['Nomduproduit'],$_POST['Referenceduproduit'],$_POST['Prix'],$_POST['Ladescription']);

// if(isset($_FILES["fichier"])){
// $file_name = $_FILES['fichier']['name'];
// 	$file_extension = strrchr($file_name, ".");
    
// 	$file_tmp_name = $_FILES['fichier']['tmp_name'];
// 	$file_dest = 'C:/wamp64/www/BACK/views/files/'.$_POST['Referenceduproduit'].$file_extension;
// 	$extensions_autoriser = array('.jpg','.png');
// 		echo $file_tmp_name."oui";

// 	if(in_array($file_extension, $extensions_autoriser)){
// 		echo 'oui';
// 		move_uploaded_file($file_tmp_name, $file_dest);
		

// }
// }

$pubC2=new pubC();
$pubC2->ajouterPub($pubC1);
header('Location: afficherpub.php');
	
}
else{
	if(!isset($_FILES)){
		echo "vérifier les champs";
	}
}

//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
// //*/

?>