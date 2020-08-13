<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>

<form method="post" action="index.php?route=<?= $route; ?>" enctype="multipart/form-data">
    <label for="title">Titre</label><br>
    <input type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
    <?= isset($errors['title']) ? $errors['title'] : ''; ?>

    <label for="chapo">Châpo</label><br>
    <textarea id="chapo" name="chapo"><?= isset($post) ? htmlspecialchars($post->get('chapo')): ''; ?></textarea><br>
    <?= isset($errors['chapo']) ? $errors['chapo'] : ''; ?>

    <label for="content">Contenu</label><br>
    <textarea id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : ''; ?>

    <label for="img">Image</label><br>
    <input id="img" name="img" type="file" value="<?= isset($post) ? $post->get('img'): ''; ?>"><br>

    <label for="bg">Background</label><br>
    <input id="bg" name="bg" type="file" value="<?= isset($post) ? $post->get('bg'): ''; ?>"><br>

    <input type="submit" value="<?= $submit; ?>" id="submit" name="submit">
</form>