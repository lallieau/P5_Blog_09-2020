<?php $this->title='Accueil'; ?>

<div class="illustration">

    <img src="img/illustration_blog_accueil.svg">
    <h1>Le blog de lallie</h1>
    <p>Bienvenue sur mon blog !</p>
    <p>Ici, vous trouverez plusieurs articles avec différentes thématiques...</p>
</div>

<div class="container">
    <?php
    if($this->session->get('logout') || $this->session->get('add_comment'))
    {
    ?>
    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">Infos</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <p>
                <?= $this->session->show('logout'); ?>
                <?= $this->session->show('add_comment'); ?>
                </p>
            </div>
        </div>
    </div>
        <?php
        }
        ?>

    <section class="card">
        <div class="card_text">
            <p>Thème n°1 : La couleur</p>
            <span class="citation">Un ton seul n'est qu'une couleur, deux tons c'est un accord, c'est la vie.</span>
            <span><p>Henri Matisse</p></span>
            <br>
           <a href="index.php?route=articlesPage">Articles &rarr;</a>
        </div>
<!--
        <div class="card_img">
            <img src="img/.img_accueil.png" alt="photo ou logo">
        </div>
        -->
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
                <p><?=substr(htmlspecialchars($article->getChapo()), 0, 120).'...';?></p>
                <a href="index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>">Lire plus...</a>

            </div>
            <?php
        }
        ?>
        </article>
    </section>
</div>