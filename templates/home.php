<?php $this->title='Accueil'; ?>

<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>

<div class="home_container">
    <h1>Le blog de lallie</h1>
    <div class="card_theme">
        <div class="card_theme_text">
            <h2>Un ton seul n'est qu'une couleur, deux tons c'est un accord, c'est la vie.</h2>
            <p>Henri Matisse</p>
            <br>
            <p><a href="index.php?route=articlesPage">Articles <span>&rarr;</span></a></p>
        </div>
        <div class="card_theme_img">
            <img src="img/test3.png" alt="photo ou logo">
        </div>
    </div>


    <div class="home_card_article">
        <?php
        foreach($articles as $article)
        {
        ?>
            <div class="card_article">
                <h2><a href="index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>"><?=htmlspecialchars($article->getTitle());?></a></h2>
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
                <p><?= htmlspecialchars($article->getChapo());?></p>
                <a href="index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>">Lire plus...</a>

            </div>
            <?php
        }
        ?>
    </div>

    <br>

    <h2><a href="pdf/cv-lallie-audry.pdf">cv</a> </h2>
    <p>lien réseaux sociaux</p>

</div>

