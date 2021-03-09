<?php
require_once 'fonctions-res.php';

$auteur = retourne_auteur();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>Réseau social</title>
</head>

<body>
    <nav class="menu">
        <p>Salut</p>
    </nav>

    <section class="contenu">
        <h2>Bonjour <?= $auteur ?> !</h2>
        <section class="nouveau-post">
            <form action="#" enctype="multipart/form-data">
                <textarea class="content-textarea" name="post-msg" id="content" cols="100" rows="10" placeholder="Quoi de neuf ?"></textarea>
                <div class="content-file">
                    <label for="file">Ajouter une image</label>
                    <input type="file" name="file" id="file" />
                </div>
                <input type="submit" value="Poster" class="btn" name="action" />
                <input type="hidden" name="MAX_FILE_SIZE" value="taille_max_octets">
            </form>
        </section>

        <article class="affiche-post">
            dadaz
        </article>

    </section>
</body>

</html>