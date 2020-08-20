<?php $this->title = 'Mon profil'; ?>

<div class="container">
    <h1>Profil</h1>

    <?php
    if($this->session->get('login') || $this->session->get('update_password') || $this->session->get('register'))
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
                <?= $this->session->show('login'); ?>
                <?= $this->session->show('update_password'); ?>
                <?= $this->session->show('register'); ?>
            </div>
        </div>
        <?php
    }
    ?>

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

                    <div class="container">
                        <div class="update_password">
                            <p>Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
                            <form method="post" action="index.php?route=updatePassword" class="form_basic">
                                <label for="password">Mot de passe</label><br>
                                <input type="password" id="password" name="password"><br>
                                <input type="submit" value="Mettre à jour" id="submit" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

