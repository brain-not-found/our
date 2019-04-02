<?php $this->titre = "PUBLICATIONS - " . $billet['Titre']; ?>

<article>
    <header>
        <h1 class="titreBillet"><?= $billet['Titre'] ?></h1>
        <time><?= $billet['Date_debut'] ?></time>
    </header>
    <p><?= $billet['Categorie'] ?></p>
</article>
<hr />
<header>
    <h1 id="titreReponses">Réponses à <?= $billet['Titre'] ?></h1>
</header>
<?php foreach ($commentaires as $commentaire): ?>
    <p><?= $commentaire['auteur'] ?> dit :</p>
    <p><?= $commentaire['contenu'] ?></p>
<?php endforeach; ?>
<hr />
<form method="post" action="index.php?action=commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['Description'] ?>" />
    <input type="submit" value="Commenter" />
</form>

