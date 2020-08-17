<?php $this->title = 'Administration'; ?>

<h1>Administration</h1>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>
<?= $this->session->show('validate_comment'); ?>
<?= $this->session->show('no_validate_comment'); ?>

<h2>Articles</h2>
<?php
foreach ($articles as $article)
{
?>
<div class="card_admin">
    <h3><a href="index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h3>
    <?php
    if (!$article->getEditAt())
    {
        ?>
        <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
        <?php
    }
    else
    {
        ?>
        <p>Modifié le : <?= htmlspecialchars($article->getEditAt());?></p>
        <?php
    }
    ?>
    <p><?= substr(htmlspecialchars($article->getChapo()), 0, 150);?>...</p>
    <p><?= substr(htmlspecialchars($article->getContent()), 0, 150);?>...</p>
    <p><?=ucfirst(htmlspecialchars($article->getAuthor()));?></p>

    <a href="index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
    <a href="index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
</div>
    <?php
}
?>
<div class="add_article">
    <a href="index.php?route=addArticle">Nouvel article</a>
</div>

<h2>Commentaires</h2>

            <?php
            foreach($comments as $comment)
            {
            ?>
<div class="card_admin">
                <h3><?=htmlspecialchars($comment->getPseudo());?></h3>
                <p><?=htmlspecialchars($comment->getContent());?></p>
                <p>Posté le <?=htmlspecialchars($comment->getCreatedAt());?></p>

                <?php
                if($comment->isValidation())
                {
                    ?>
                    <p><a href="index.php?route=noValidateComment&commentId=<?= $comment->getId(); ?>">Ne plus valider le commentaire</a></p>
                    <?php
                }
                else
                {
                    ?>
                    <p><a href="index.php?route=validateComment&commentId=<?= $comment->getId(); ?>">Valider le commentaire</a></p>
                    <?php
                }
                ?>
                <p><a href="index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>

</div>
                <?php
            }
            ?>





<h2>Utilisateurs</h2>

<?php
foreach ($users as $user)
{
?>
<div class="card_admin">
    <p>Pseudo : <?= htmlspecialchars($user->getPseudo());?></p>
    <p>Date : <?= htmlspecialchars($user->getCreatedAt());?></p>
    <p>Rôle : <?= htmlspecialchars($user->getRole());?></p>
    <p>Actions :
        <?php
        if($user->getRole() != 'admin') {
            ?>
            <a href="index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer</a>
        <?php }
        else {
            ?>
            Suppression impossible
            <?php
        }
        ?>
    </p>
</div>
<?php
}
?>
