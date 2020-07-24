<?php $this->title="Accueil"; ?>
<?php
if ($this->session->get('pseudo'))
{
?>
<a href="../public/index.php?route=logout">Déconnexion</a>
<a href="../public/index.php?route=profile">Profil</a>
<?php
if($this->session->get('role') === 'admin')
{ ?>
    <a href="../public/index.php?route=administration">Administration</a>
<?php } ?>
<?php
}
else
{
?>
<a href="../public/index.php?route=register">Inscription</a>
<a href="../public/index.php?route=login">Connexion</a>
<?php
}
?>
<br>

<h2>Lallie Audry</h2>
<h1>Le blog</h1>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>


<h2><a href="../public/index.php?route=articlesPage">tous les articles</a> </h2>

<br>

