<?php $this->title = "Article"; ?>


<div class="cactus">

    <div class="fleur">

    <h2><?=htmlspecialchars($article->getTitle());?></h2>
    <p><?=htmlspecialchars($article->getChapo());?></p>
    <p><?=htmlspecialchars($article->getContent());?></p>
    <p><?=htmlspecialchars($article->getAuthor());?></p>
    <?php
    if (!$article->getEditAt())
    {
        ?>
        <td>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
        <?php
    }
    else
    {
        ?>
        <td>Modifié le : <?= htmlspecialchars($article->getEditAt());?></td>
        <?php
    }
    ?>
    </div>
</div>
<br>

<a href="index.php">Retour à l'acceuil</a>
<div id="comments" class="text-left">
    <h3>Ajouter un commentaire</h3>
    <?php include('form_comment.php'); ?>

    <h3>Commentaires</h3>
    <?php
    foreach($comments as $comment)
    {
        if($comment->isValidation())
        {
        ?>

            <h4><?=htmlspecialchars($comment->getPseudo());?></h4>
            <p><?=htmlspecialchars($comment->getContent());?></p>
            <p>Posté le <?=htmlspecialchars($comment->getCreatedAt());?></p>
        <p><a href="index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
        <?php
    }
    }
    ?>

</div>

