<HTML>
<head>
</head>	
<body>

<?PHP


include "../entities/pub.php";
include "../core/pubC.php";

if (isset($_GET['Nomduproduit'])){
	$pubC=new pubC();
    $result=$pubC->recupererpub($_GET['Nomduproduit']);
	foreach($result as $row){
		$Nomduproduit=$row['Nomduproduit'];
		$Referenceduproduit=$row['Referenceduproduit'];
		$Prix=$row['Prix'];
		$Ladescription=$row['Ladescription'];
		
		}
?>
<center>
<form method="POST">
<table>
  <caption><h2>Modifier pub</h2></caption>
<tr>
<td><h4>Nomduproduit<h4></td>
<td><input type="text" name="Nomduproduit" class="form-control" style="margin-top:-10% "; "tip="chaine" value="<?PHP echo $Nomduproduit ?>"></td>
</tr>
<tr>
<td><h4>Referenceduproduit</h4></td>
<td><input type="number" name="Referenceduproduit" class="form-control" style="margin-top:-10% "; "tip="numero" value="<?PHP echo $Referenceduproduit ?>"></td>
</tr>
<tr>
<td><h4>Prix</h4></td>
<td><input type="number" name="Prix" class="form-control" style="margin-top:-10% "; "tip="numero" value="<?PHP echo $Prix ?>"></td>
</tr>
<tr>
<td><h4>Ladescription</h4></td>
<td><input type="text" name="Ladescription"class="form-control" style="margin-top:-10% "; "tip="chaine" value="<?PHP echo $Ladescription ?>"></td>

  



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
if (isset($_POST['modifier']))
{
	$pub=new pub($_POST['Nomduproduit'],$_POST['Referenceduproduit'],$_POST['Prix'],$_POST['Ladescription']);
	$pubC->modifierpub($pub,$_POST['Nomduproduit_ini']);
	echo $_POST['Nomduproduit_ini'];
	header('Location: Afficherpub.php');
}
?>
 <script src="gestion pub.js"> </script>
</body>
</HTML>
