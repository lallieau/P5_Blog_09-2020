<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Envoyer' : 'Mettre à jour';
?>

<form method="post" action="index.php?route=<?= $route ?>&articleId=<?=$article->getId()?>" class="form_comment">

    <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" value="<?= $this->session->get('pseudo'); ?>"><br>
    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>

    <textarea id="content" name="content" placeholder="Votre message"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : ''; ?>

    <input type="submit" value="<?= $submit ?>" id="submit" name="submit">

</form>