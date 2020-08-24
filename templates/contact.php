<?php $this->title="Page Contact"; ?>
<div class="container">
<h1>Contactez-moi</h1>
    <?php
    if($this->session->get('contact'))
    {
        ?>
    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">Infos</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <p>
                <?= $this->session->show('contact'); ?>
                </p>
            </div>
        </div>
    </div>
        <?php
    }
    ?>
<div>
    <?php include('form_contact.php'); ?>
</div>
</div>