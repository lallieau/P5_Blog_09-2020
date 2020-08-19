<?php $this->title = "Connexion"; ?>
<div class="container">
<h1>Se connecter</h1>
<?= $this->session->show('error_login'); ?>

    <form method="post" action="index.php?route=login" class="form_basic">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Se connecter" id="submit" name="submit">
    </form>

    <a class="nav-link" href="index.php?route=register">Pas encore inscrit</a>
</div>