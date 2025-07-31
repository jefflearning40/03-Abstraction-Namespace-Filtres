<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($erreurs)) : 
?>
    <div class="success">
        <p><strong>Formulaire envoyé avec succès !</strong></p>
        <p>Nom : <?= htmlspecialchars($nom) ?></p>
        <p>Email : <?= htmlspecialchars($email) ?></p>
        <p>Âge : <?= htmlspecialchars($age) ?></p>
    </div>
<?php 
endif;
 ?>
<form method="post" action=formulaire.php>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($nom) ?>">
    <?php if (!empty($erreurs['nom'])): ?><div class="erreur"><?= $erreurs['nom'] ?></div><?php endif; ?>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>">
    <?php if (!empty($erreurs['email'])): ?><div class="erreur"><?= $erreurs['email'] ?></div><?php endif; ?>

    <label for="age">Âge :</label>
    <input type="number" name="age" id="age" value="<?= htmlspecialchars($age) ?>">
    <?php if (!empty($erreurs['age'])): ?><div class="erreur"><?= $erreurs['age'] ?></div><?php endif; ?>

    <input type="submit" value="Envoyer">
</form>