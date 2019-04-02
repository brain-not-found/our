<?php 

include "../entities/offre.php";
include "../core/offreC.php";

if (isset($_POST['modifier']))
{
	$offre=new offre($_POST['Nomduproduit'],$_POST['Prix'],$_POST['Reduction'],$_POST['Ladescription']);
	$offreC=new offreC();
	$offreC->modifieroffre($offre,$_POST['Nomduproduit_ini']);
	header('Location: Afficheroffre.php');
}
?>

<HTML>
<head>
</head>	
<body>

<?PHP

if (isset($_GET['Nomduproduit'])){
	$offreC=new offreC();
    $result=$offreC->recupereroffre($_GET['Nomduproduit']);
	foreach($result as $row){
		$Nomduproduit=$row['Nomduproduit'];
		$Prix=$row['Prix'];
		$Reduction=$row['Reduction'];
		$Ladescription=$row['Ladescription'];
		
		}
?>
<center>
<form method="POST" action="">
<table>
  <caption><h2>Modifier offre</h2></caption>
<tr>
<td><h4>Nomduproduit<h4></td>
<td><input type="text" name="Nomduproduit" class="form-control" style="margin-top:-10% "; "tip="chaine" value="<?PHP echo $Nomduproduit ?>"></td>
</tr>
<tr>
<td><h4>Prix</h4></td>
<td><input type="number" name="Prix" class="form-control" style="margin-top:-10% "; "tip="numero" value="<?PHP echo $Prix ?>"></td>
</tr>
<tr>
<td><h4>Reduction</h4></td>
<td><input type="number" name="Reduction" class="form-control" style="margin-top:-10% "; "tip="numero" value="<?PHP echo $Prix ?>"></td>
</tr>

<tr>
<td><h4>Ladescription</h4></td>
<td><input type="text" name="Ladescription"class="form-control" style="margin-top:-10% "; "tip="chaine" value="<?PHP echo $Ladescription ?>"></td>
</tr>
  



<td><input type="submit" name="modifier" value="modifier"></td>
<tr>

<td></td>
<td><input type="hidden" name="Nomduproduit_ini" value="<?PHP echo $_GET['Nomduproduit'];?>"></td>
</tr>
</table>
</form>
</center>

<?PHP
}
?>
 <script src="gestion pub.js"> </script>
</body>
</HTML>
