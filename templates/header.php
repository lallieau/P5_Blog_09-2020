
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>header</title>
    <link href="../public/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../public/index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../public/index.php?route=articlesPage">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>

            <?php
            if ($this->session->get('pseudo'))
            {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?route=logout">Déconnexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?route=profile">Profil</a>
                </li>

                <?php
                if($this->session->get('role') === 'admin')
                { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../public/index.php?route=administration">Administration</a>
                    </li>
                <?php } ?>
                <?php
            }
            else
            {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?route=register">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?route=login">Connexion</a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</nav>
</body>
</html>
