<?php $this->title="Page Articles"; ?>

<?php
foreach($articles as $article)
{
    ?>

    <div>
        <h2><a href="index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>"><?=htmlspecialchars($article->getTitle());?></a></h2>
        <p><?=htmlspecialchars($article->getChapo());?></p>
        <p><a href="index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>">Lire l'article</a></p>
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
    <br>

    <?php
}
?>
