<?php $this->title="Navbar mobile"; ?>

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="burger">
            <div class="x"></div>
        <div class="y"></div>
        <div class="z"></div>
        </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" title="Accueil"href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="Articles" href="index.php?route=articlesPage">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="Contact" href="index.php?route=contactPage">Contact</a>
            </li>

            <?php
            if ($this->session->get('pseudo'))
            {
            ?>
            <li class="nav-item">
                <a class="nav-link" title="Profil" href="index.php?route=profile">Profil</a>
            </li>
            <?php
            }
            else
            {
            ?>
            <li class="nav-item">
                <a class="nav-link" title="Profil" href="index.php?route=login">Se connecter</a>
            </li>
            <?php
            }
            ?>
            <li class="nav-item">
                <a class="nav-link" href="pdf/cv-lallie-audry.pdf">curriculum vitae</a>
            </li>

        </ul>
    </div>
</nav>

