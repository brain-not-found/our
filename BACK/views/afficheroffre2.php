<?php
include "../core/offre.php";
include "../core/offreC.php";
$offre1C=new offreC();
$listeoffre=$offre1C->afficheroffre2();

?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Offre</title>
  </head>
  <body>
    <div id="global">
      <header>
        <a href="afficheroffre2.php"><h1 id="titreBlog">Offre</h1></a>
        <p>Welcome.</p>
      </header>
      <div id="contenu">
       <?php ob_start(); ?>
        <?php
         
        foreach ($listeoffre as $row): ?>
          <article>
            <header>
              <a href="<?= "offreC.php?Nomduproduit=" . $row['Nomduproduit'] ?>">
              <h1 class="offre"><?= $row['Prix'] ?></h1>
              <time><?= $row['Reduction'] ?></time>
              <time><?= $row['Ladescription'] ?></time>
            </header>
            <p><?= $row['Categorie'] ?></p>
          </article>
          <hr />
        <?php endforeach; ?>
      </div> <!-- #contenu -->
      <footer id="piedBlog">
        Faite nous confiance!
      </footer>
    </div> <!-- #global -->
  </body>
</html>