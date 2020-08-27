<?php $this->title="Page Articles"; ?>
<?php $this->description='Page articles, retrouvez tous les articles pour chaque thématiques...'; ?>
<div class="container">
    <h1>Les articles</h1>

    <?php
    foreach($articles as $article)
    {
    ?>

    <article class="card">
        <div class="card_text">
            <h2><a href="index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>"><?=htmlspecialchars($article->getTitle());?></a></h2>
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
            <p><?=substr(htmlspecialchars($article->getChapo()), 0, 200).'...';?></p>

            <a href="index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>">Lire l'article...</a>
        </div>
<!--
        <div class="card_img">
            <img src="<?php
            if($article->getImg())
            {
                echo htmlspecialchars($article->getImg());
            }
            else
                {
                    echo "img/test3.png";
                }

            ?>" alt="">
        </div>
-->
    </article>

    <?php
    }
    ?>
</div>