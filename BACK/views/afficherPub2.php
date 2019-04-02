<?php
include "../core/pub.php";
include "../core/pubC.php";
$pub1C=new pubC();
$listepub=$pub1C->afficherPub2();

?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Publcite</title>
  </head>
  <body>
    <div id="global">
      <header>
        <a href="afficherPub2.php"><h1 id="titreBlog">Publicité</h1></a>
        <p>Bienvenue sur notre site web.</p>
      </header>
      <div id="contenu">
       <?php ob_start(); ?>
        <?php
         
        foreach ($listepub as $row){
echo '          <article>
           <h3 align= "right" ><header>
              <a href="pubC.php?Nomduproduit='.$row['Nomduproduit'].'">
              <h1 class="Publiciter">'.$row['Nomduproduit'].'</h1>
              <h1>'.$row['Referenceduproduit'].'<h1>
              <h1>'.$row['Prix'].'</h1>
            </header>
            <h1><p>'.$row['Ladescription'].'</p></h1>
          </article> </h3>
          <hr />';
          
        } ?>
      </div> <!-- #contenu -->
<h3 align="right"> Faite nous confiance!</h3>
    </div> <!-- #global -->
  </body>
</html>