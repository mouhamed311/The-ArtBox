<?php include_once("oeuvres.php"); ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<header>
    <a href="index.html"><img src="img/logo.png" alt="Logo Artbox" id="logo"></a>
    <nav>
        <ul>
            <li><a href="index.html">Accueil</a></li>
        </ul>
    </nav>
</header>
<main>
    <?php affiche_oeuvre($_GET["id"]); ?>
</main>
<footer>
    <p>
        <strong>© THE ARTBOX</strong> - <em>Tous droits réservés</em>
    </p>
</footer>
</body>
</html>
