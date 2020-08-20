<?php $this->title = "Connexion"; ?>
<div class="container">
<h1>Se connecter</h1>

    <?php
    if($this->session->get('register') || $this->session->get('error_login'))
    {
        ?>
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <?= $this->session->show('register'); ?>
                <?= $this->session->show('error_login'); ?>
            </div>
        </div>
        <?php
    }
    ?>


    <form method="post" action="index.php?route=login" class="form_basic">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Se connecter" id="submit" name="submit">
    </form>

    <a class="nav-link" href="index.php?route=register">Pas encore inscrit</a>
</div>