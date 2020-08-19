<?php $this->title = 'Mon profil'; ?>

<div class="container">
    <h1>Profil</h1>
    <?= $this->session->show('update_password'); ?>
    <?= $this->session->show('not_admin'); ?>
    <?= $this->session->show('need_login'); ?>
    <div class="card_admin">
        <h2><?= $this->session->get('pseudo'); ?></h2>
        <button type="button" data-toggle="modal" data-target="#staticBackdrop">
        Modifier mon mot de passe
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


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Mot de passe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php include('update_password.php'); ?>
                </div>
            </div>
        </div>
</div>

