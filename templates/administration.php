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
<a href="index.php?route=addArticle">Nouvel article</a>
<?php
foreach ($articles as $article)
{
?>
<table>
    <tr>
        <td class="title">Id</td>
        <td><?= htmlspecialchars($article->getId());?></td>
        <td class="title">Titre</td>
        <td><a href="index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
        <td class="title">Chapô</td>
        <td><?= substr(htmlspecialchars($article->getChapo()), 0, 150);?>...</td>
        <td class="title">Contenu</td>
        <td><?= substr(htmlspecialchars($article->getContent()), 0, 150);?>...</td>
        <td class="title">Auteur</td>
        <td><?= htmlspecialchars($article->getAuthor());?></td>
        <td class="title">Date</td>
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
        <td class="title">Actions</td>
        <td>
            <a href="index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
            <a href="index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
        </td>
    </tr>


</table><br>
    <?php
}
?>

<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h3>
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?= htmlspecialchars($article->getTitle());?><br> <span>&darr;</span>
                </button>
            </h3>
        </div>

        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
            <?php
            foreach($comments as $comment)
            {
                if($comment->isValidation())
                {
                    ?>
                    <div class="card-body">
                        <h4><?=htmlspecialchars($comment->getPseudo());?></h4>
                        <p><?=htmlspecialchars($comment->getContent());?></p>
                        <h5>Posté le <?=htmlspecialchars($comment->getCreatedAt());?></h5>

                    </div>
                    <?php
                }
            }
            ?>
            <h3>&Eacute;crire un commentaire</h3>
            <?php include('form_comment.php'); ?>
        </div>

    </div>
</div>
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