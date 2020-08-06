<?php $this->title='Accueil'; ?>

<div class="container">
<h1>Le blog de lallie</h1>
<div class="home_card_theme">
    <div class="home_card_theme_text">
        <h2>Un ton seul n'est qu'une couleur, deux tons c'est un accord, c'est la vie.</h2>
        <p>Henri Matisse</p>
        <br>
        <a href="index.php?route=articlesPage">Articles <span>&rarr;</span></a>
    </div>
    <div class="home_card_theme_img">
        <img src="img/test3.png" alt="photo ou logo">
    </div>
</div>

<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>

    <div class="home_card_article">

        <div class="card">
            <h2><span>Articles</span></h2>
            <div class="card-body">
                <h2 class="card-title">Special title treatment</h2>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#">Lire plus...</a>
            </div>
        </div>
    </div>
    <br>


    <h2><a href="pdf/cv-lallie-audry.pdf">cv</a> </h2>
<p>lien réseaux sociaux</p>
</div>
