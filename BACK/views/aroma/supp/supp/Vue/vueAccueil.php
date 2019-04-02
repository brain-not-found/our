<?php $this->titre = "PUBLICATIONS"; ?>

<?php foreach ($billets as $billet):
    ?>
    <article>
        <header>
            <a href="<?= "index.php?action=billet&id=" . $billet['Description'] ?>">
                <h1 class="titreBillet"><?= $billet['Titre'] ?></h1>
            </a>
            <time><?= $billet['Date_debut'] ?></time>
        </header>
        <p><?= $billet['Categorie'] ?></p>
    </article>
    <hr />
<?php endforeach; ?>
