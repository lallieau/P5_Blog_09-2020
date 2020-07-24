<?php $this->title="Accueil"; ?>
<?php
if ($this->session->get('pseudo'))
{
    ?>
    <a href="../public/index.php?route=logout">Déconnexion</a>
    <a href="../public/index.php?route=profile">Profil</a>
    <?php
    if($this->session->get('role') === 'admin')
    { ?>
        <a href="../public/index.php?route=administration">Administration</a>
    <?php } ?>
    <?php
}
else
{
    ?>
    <a href="../public/index.php?route=register">Inscription</a>
    <a href="../public/index.php?route=login">Connexion</a>
    <?php
}
?>
<br>


<?php
foreach($articles as $article)
{
    ?>

    <div>
        <h2><a href="../public/index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>"><?=htmlspecialchars($article->getTitle());?></a></h2>
        <p><?=htmlspecialchars($article->getContent());?></p>
        <p><?=htmlspecialchars($article->getAuthor());?></p>
        <p>Créé le : <?=htmlspecialchars($article->getCreatedAt());?></p>
    </div>
    <br>

    <?php
}
?>
