<?php $this->title = "Article"; ?>
<?php $this->description='Page d\'article, voici un article sur...'; ?>

<style type="text/css">
    body {background-image: url("<?= $article->getBg()?>");}
</style>

<div class="container">
    <article class="card">
        <div class="card_single">
            <h1><?=htmlspecialchars($article->getTitle());?></h1>
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
            <br>
            <p><?=htmlspecialchars($article->getChapo());?></p>
            <p><?=htmlspecialchars($article->getContent());?></p>
            <br>
            <p><?=ucfirst(htmlspecialchars($article->getAuthor()));?></p>
            <br>

            <a href="index.php?route=articlesPage">Tous les articles</a>

            <div class="accordion" id="accordionExample">
                <div class="card-header" id="headingOne">
                    <h2>
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Commentaires <br> <span>&darr;</span>
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                <?php
                foreach($comments as $comment)
                {
                    if($comment->isValidation())
                    {
                    ?>
                    <div class="card-body">
                        <p><?=htmlspecialchars($comment->getPseudo());?></p>
                        <p><?=htmlspecialchars($comment->getContent());?></p>
                        <p>Posté le <?=htmlspecialchars($comment->getCreatedAt());?></p>
                    </div>
                    <?php
                    }
                }
                ?>
                    <h3>&Eacute;crire un commentaire</h3>
                    <?php include 'form_comment.php';?>
                </div>
            </div>
        </div>
    </article>
</div>

