<?php $this->title="Page Articles"; ?>

<?php
foreach($articles as $article)
{
    ?>
    <div class="card_theme">

        <div class="card_theme_text">
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
            <p><?=substr(htmlspecialchars($article->getChapo()), 0, 200).'...';?></p>
            <p><a href="index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>">Lire l'article...</a></p>

        </div>
        <div class="card_theme_img">
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

    </div>


<?php
}
?>
