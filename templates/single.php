<?php $this->title = "Article"; ?>

<div class="card_theme">

    <div class="card_theme_text_single">

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

    <p><a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Commentaires</a></p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    <?php
                    foreach($comments as $comment)
                    {
                        if($comment->isValidation())
                        {
                            ?>

                            <h4><?=htmlspecialchars($comment->getPseudo());?></h4>
                            <p><?=htmlspecialchars($comment->getContent());?></p>
                            <p>Posté le <?=htmlspecialchars($comment->getCreatedAt());?></p>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php include('form_comment.php'); ?>


