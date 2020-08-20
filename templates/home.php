<?php $this->title='Accueil'; ?>

<div class="container">

    <?php
    if($this->session->get('logout') || $this->session->get('add_comment'))
    {
    ?>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <?= $this->session->show('logout'); ?>
            <?= $this->session->show('add_comment'); ?>
        </div>
    </div>
        <?php
        }
        ?>


        <h1>Le blog de lallie</h1>
<!--
    <a href="pdf/cv-lallie-audry.pdf">cv</a>
    <p>lien réseaux sociaux</p>
-->
    <section class="card">
        <div class="card_text">
            <span class="citation">Un ton seul n'est qu'une couleur, deux tons c'est un accord, c'est la vie.</span>
            <p>Henri Matisse</p>
            <br>
            <a href="index.php?route=articlesPage">Articles &rarr;</a>
        </div>

        <div class="card_img">
            <img src="img/test3.png" alt="photo ou logo">
        </div>
    </section>

    <section class="article">
        <span>Les derniers articles</span>
        <article class="home_card_article">
        <?php
        foreach($articles as $article)
        {
        ?>
            <div class="card_article">
                <h3><a href="index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>"><?=htmlspecialchars($article->getTitle());?></a></h3>
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
                <p><?= htmlspecialchars($article->getChapo());?></p>
                <a href="index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>">Lire plus...</a>

            </div>
            <?php
        }
        ?>
        </article>
    </section>

</div>

