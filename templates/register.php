<?php $this->title = "Inscription"; ?>
<?php $this->description='Page d\'inscription, inscrivez vous pour accéder à la page profil...'; ?>
<div class="container">
<h1>S'inscrire</h1>

    <form method="post" action="index.php?route=register" class="form_basic">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>

        <label for="inputGroupSelect01">Sexe</label>
        <div class="input-group">
            <select class="custom-select" id="inputGroupSelect01" name="sexe">
                <option value="1">Homme</option>
                <option value="2">Femme</option>
            </select>
        </div>

        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <?= isset($errors['password']) ? $errors['password'] : ''; ?>

        <input type="submit" value="S'inscrire" id="submit" name="submit">
    </form>
</div>

