<?php $this->titre = "offre"; ?>

<?php foreach ($billets as $billet):
    ?>
    <article>
        <header>
            <a href="<?= "index.php?action=billet&id=" . $billet['Nomduproduit'] ?>">
                <h1 class="titreBillet"><?= $billet['Prix'] ?></h1>
                <h1 class="titreBillet"><?= $billet['Reduction'] ?></h1>
                <h1 class="titreBillet"><?= $billet['Ladescription'] ?></h1>
                
            </a>
            
        </header>
        
    </article>
    <hr />
<?php endforeach; ?>
