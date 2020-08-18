<?php $this->title = 'Mon profil'; ?>
<div class="container">
    <h1>Profil</h1>
    <?= $this->session->show('update_password'); ?>
    <?= $this->session->show('not_admin'); ?>
    <?= $this->session->show('need_login'); ?>
    <div class="card_admin">
        <h2><?= $this->session->get('pseudo'); ?></h2>
        <button type="button">
        <a href="index.php?route=updatePassword">Modifier son mot de passe</a>
        </button><br><br>
        <button type="button">
        <a href="index.php?route=deleteAccount">Supprimer mon compte</a>
        </button>
        <?php
        if($this->session->get('role') === 'admin')
        { ?>
        <button type="button" class="btn_admin">
            <a href="index.php?route=administration">Administration</a>
        </button>
        <?php } ?>
    </div>
    <br>
    <div class="card_admin">
    <a href="index.php?route=logout">Déconnexion</a>
    </div>
</div>