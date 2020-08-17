<?php $this->title='Accueil'; ?>

<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>

<div class="container">

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
            <a href="index.php?route=articlesPage">Articles <span>&rarr;</span></a>
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

