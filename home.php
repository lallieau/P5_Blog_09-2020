<?php
require 'Database.php';
require 'Article.php';
?>
<!DOCTYPE html>
<html lang="'fr">
<head>
    <meta charset="'utf-8">
    <title>Blog de Lallie, page d'accueil</title>
</head>
<body>
    <div>
        <h1>Mon blog</h1>
        <p>En construction...</p>

        <?php
        $article = new Article();
        $articles = $article->getArticles();
        while($article = $articles->fetch())
        {

        ?>

        <div>
            <h2><?=htmlspecialchars($article['title']);?></h2>
            <p><?=htmlspecialchars($article['content']);?></p>
            <p><?=htmlspecialchars($article['author']);?></p>
            <p>Créé le : <?=htmlspecialchars($article['createdAt']);?></p>
        </div>
        <br>

        <?php
        }

        $articles->closeCursor();
        ?>

    </div>
</body>
</html>