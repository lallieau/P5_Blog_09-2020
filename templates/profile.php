<?php $this->title = 'Mon profil'; ?>
<h1>Mon blog</h1>
<p>En construction</p>
<?= $this->session->show('update_password'); ?>
<?= $this->session->show('not_admin'); ?>
<?= $this->session->show('need_login'); ?>
<div>
    <h2><?= $this->session->get('pseudo'); ?></h2>
    <p><?= $this->session->get('id'); ?></p>
    <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
    <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
    <a class="nav-link" href="../public/index.php?route=logout">Déconnexion</a>

    <?php
    if($this->session->get('role') === 'admin')
    { ?>
        <li class="nav-item">
            <a class="nav-link" href="../public/index.php?route=administration">Administration</a>
        </li>
    <?php } ?>
</div>
<br>
<a href="../public/index.php">Retour à l'accueil</a>