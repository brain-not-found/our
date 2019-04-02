<?PHP
include "../entities/pub.php";
include "../core/pubC.php";

$pub1C=new pubC();
$listepub=$pub1C->afficherpub();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Nomduproduit</td>
<td>Referenceduproduit</td>
<td>Prix</td>
<td>La description</td>

<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listepub as $val=>$row){
	?>
	<tr>
	<td><?PHP echo $row['Nomduproduit']; ?></td>
	<td><?PHP echo $row['Referenceduproduit']; ?></td>
	<td><?PHP echo $row['Prix']; ?></td>
	<td><?PHP echo $row['Ladescription']; ?></td>
  
	<td><form method="POST" action="supprimerpub.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Nomduproduit']; ?>" name="Nomduproduit">
	</form>
	</td>
	<td><a href="modifierpub.php?Nomduproduit=<?PHP echo $row['Nomduproduit']; ?>">
	Modifier</a></td>
	</tr>	
	<?PHP
}
?>
</table>


