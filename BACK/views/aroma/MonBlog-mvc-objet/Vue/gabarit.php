<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Contenu/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Vos offres</h1></a>
                <p>Obtenez moins de 20% sur chacun de nos produits.</p>
            </header>
            <div id="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                Avec KARMA vous obtiendrez toujours satisfaction 
            </footer>
        </div> <!-- #global -->
    </body>
</html>