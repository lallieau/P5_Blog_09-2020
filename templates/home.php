<?php $this->title='Accueil'; ?>
<div class="header_home">
    <h1>couleurs</h1>
    <h2>un blog de Lallie Audry</h2>
    <img src="#" alt="photo ou logo">
</div>

<p>Phrase de présentation, phrase d'accroche</p>

<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>

<h2><a href="../public/index.php?route=articlesPage">tous les articles</a> </h2>
<h2><a href="../public/pdf/cv-lallie-audry.pdf">cv</a> </h2>

<form>
    <label>Formulaire de contact</label><br>
    <input type="text">
</form>

<p>lien vers cv en pdf</p>
<p>lien réseaux sociaux</p>
<br>
