<?php $this->title="Accueil"; ?>

<?php
foreach($articles as $article)
{
    ?>

    <div>
        <h2><a href="../public/index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>"><?=htmlspecialchars($article->getTitle());?></a></h2>
        <p><?=htmlspecialchars($article->getChapo());?></p>
        <p><a href="../public/index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>">Lire l'article</a></p>
        <p>Créé le : <?=htmlspecialchars($article->getCreatedAt());?></p>
    </div>
    <br>

    <?php
}
?>
