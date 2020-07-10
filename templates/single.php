<?php
use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
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

    <div>
        <h2><?=htmlspecialchars($article->getTitle());?></h2>
        <p><?=htmlspecialchars($article->getContent());?></p>
        <p><?=htmlspecialchars($article->getAuthor());?></p>
        <p>Créé le : <?=htmlspecialchars($article->getCreatedAt());?></p>
    </div>
    <br>


    <a href="../public/index.php">Retour à l'acceuil</a>
    <div id="comments" class="text-left" style="margin-left: 50px">
        <h3>Commentaires</h3>

        <?php
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
