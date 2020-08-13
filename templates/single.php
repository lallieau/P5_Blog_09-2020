<?php $this->title = "Article"; ?>

<style type="text/css">
    body{
        background-image: url("<?= $article->getBg()?>");
    }
</style>

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
        <h5>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></h5>
        <?php
    }
    else
    {
        ?>
        <h5>Modifié le : <?= htmlspecialchars($article->getEditAt());?></h5>
        <?php
    }
    ?>
        <a href="index.php?route=articlesPage">Tous les articles</a>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2>
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Commentaires
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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
                    <?php include('form_comment.php'); ?>
                </div>

            </div>
        </div>


    </div>
</div>
<br>


