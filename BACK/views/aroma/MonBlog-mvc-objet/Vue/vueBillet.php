<?php $this->titre = "PUBLICATIONS - " . $billet['Prix']; ?>

<article>
    <header>
        <h1 class="titreBillet"><?= $billet['Prix'] ?></h1>
        <time><?= $billet['Reduction'] ?></time>
    </header>
    <p><?= $billet['Ladescription'] ?></p>
</article>
<hr />
<header>
    <h1 id="titreReponses">Réponses à <?= $billet['Prix'] ?></h1>
</header>
<?php foreach ($commentaires as $commentaire): ?>
    <p><?= $commentaire['COM_AUTEUR'] ?> dit :</p>
    <p><?= $commentaire['COM_CONTENU'] ?></p>
<?php endforeach; ?>
<hr />
<form method="post" action="index.php?action=commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['Nomduproduit'] ?>" />
    <input type="submit" value="Commenter" />
</form>

