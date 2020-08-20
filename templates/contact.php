<?php $this->title="Page Contact"; ?>
<div class="container">
<h1>Contactez-moi</h1>
    <?php
    if($this->session->get('contact'))
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
                <?= $this->session->show('contact'); ?>
            </div>
        </div>
        <?php
    }
    ?>
<div>
    <?php include('form_contact.php'); ?>
</div>
</div>