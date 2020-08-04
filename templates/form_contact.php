<form method="post" action="../public/index.php?route=newContact">
    <label for="name">Nom</label><br>
    <input type="text" id="name" name="name" value="<?= isset($post) ? htmlspecialchars($post->get('name')): ''; ?>"><br>
    <?= isset($errors['name']) ? $errors['name'] : ''; ?>

    <label for="email">Email</label><br>
    <textarea id="email" name="email"><?= isset($post) ? htmlspecialchars($post->get('email')): ''; ?></textarea><br>
    <?= isset($errors['email']) ? $errors['email'] : ''; ?>

    <label for="content">Message</label><br>
    <textarea id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : ''; ?>

    <input type="submit" value="Envoyer" id="submit" name="submit">
</form>
