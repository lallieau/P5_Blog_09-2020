<?php $this->title = 'Administration'; ?>

<h1>Mon blog</h1>
<p>En construction</p>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>
<?= $this->session->show('validate_comment'); ?>
<?= $this->session->show('no_validate_comment'); ?>

<h2>Articles</h2>
<a href="index.php?route=addArticle">Nouvel article</a>
<table>
    <tr>
        <td>Id</td>
        <td>Titre</td>
        <td>Contenu</td>
        <td>Auteur</td>
        <td>Date</td>
        <td>Actions</td>
    </tr>
    <?php
    foreach ($articles as $article)
    {
        ?>
        <tr>
            <td><?= htmlspecialchars($article->getId());?></td>
            <td><a href="index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
            <td><?= substr(htmlspecialchars($article->getChapo()), 0, 150);?></td>
            <td><?= substr(htmlspecialchars($article->getContent()), 0, 150);?></td>
            <td><?= htmlspecialchars($article->getAuthor());?></td>
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
            <td>
                <a href="index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                <a href="index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<h2>Commentaires</h2>

<table>
    <tr>
        <td>Id</td>
        <td>Pseudo</td>
        <td>Message</td>
        <td>Date</td>
    </tr>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <tr>
            <td><?= htmlspecialchars($comment->getId());?></td>
            <td><?= htmlspecialchars($comment->getPseudo());?></td>
            <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
            <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
            <td>
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
                <br>
                <?php
                }
                ?>
                 </td>
        </tr>
</table>

<h2>Utilisateurs</h2>
<table>
    <tr>
        <td>Id</td>
        <td>Pseudo</td>
        <td>Date</td>
        <td>Rôle</td>
        <td>Actions</td>
    </tr>
    <?php
    foreach ($users as $user)
    {
        ?>
        <tr>
            <td><?= htmlspecialchars($user->getId());?></td>
            <td><?= htmlspecialchars($user->getPseudo());?></td>
            <td>Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
            <td><?= htmlspecialchars($user->getRole());?></td>
            <td>
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
            </td>
        </tr>
        <?php
    }
    ?>
</table>