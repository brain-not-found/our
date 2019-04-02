<?PHP
include "../entities/offre.php";
include "../core/offreC.php";

$offre1C=new offreC();
$listeoffre=$offre1C->afficheroffre();

//var_dump($listeEmployes->fetchAll());
?>
<center>
<table border="1">
<tr>
<td>Nomduproduit</td>
<td>Prix</td>
<td>Reduction</td>
<td>La description</td>
<td>supprimer</td>
<td>modifier</td>
</center>
</tr>

<?PHP
foreach($listeoffre as $val=>$row){
	?>
	<tr>
	<td><?PHP echo $row['Nomduproduit']; ?></td>
	<td><?PHP echo $row['Prix']; ?></td>
	<td><?PHP echo $row['Reduction']; ?></td>
	<td><?PHP echo $row['Ladescription']; ?></td>
	<td><form method="POST" action="supprimeroffre.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Nomduproduit']; ?>" name="Nomduproduit">
	</form>
	</td>
	<td><a href="modifieroffre.php?Nomduproduit=<?PHP echo $row['Nomduproduit']; ?>">
	Modifier</a></td>
	</tr>	
	<?PHP
}
?>
</table>

