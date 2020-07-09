<?php

require 'Database.php';
require 'Article.php';
require 'Comment.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Blog de Lallie, page article</title>
</head>
<body>
<div>
    <h1>Mon blog</h1>
    <p>En construction toujours...</p>

    <?php
    $article = new Article();
    $articles = $article->getArticle($_GET['articleId']);
    $article = $articles->fetch();
    ?>
    <div>
        <h2><?=htmlspecialchars($article->title);?></h2>
        <p><?=htmlspecialchars($article->content);?></p>
        <p><?=htmlspecialchars($article->author);?></p>
        <p>Créé le : <?=htmlspecialchars($article->createdAt);?></p>
    </div>
    <br>

    <?php
    $articles->closeCursor();
    ?>

    <a href="home.php">Retour à l'acceuil</a>
    <div id="comments" class="text-left" style="margin-left: 50px">
        <h3>Commentaires</h3>

        <?php
        $comment = new Comment();
        $comments = $comment->getCommentsFromArticle($_GET['articleId']);
        while($comment = $comments->fetch())
        {
        ?>
        <h4><?=htmlspecialchars($comment->pseudo);?></h4>
        <p><?=htmlspecialchars($comment->content);?></p>
        <p>Posté le <?=htmlspecialchars($comment->createdAt);?></p>
        <?php
        }
        $comments->closeCursor();
        ?>
    </div>

</div>
</body>
</html>
