<?php
// Initialisation des variables (évite les erreurs avant envoi du formulaire)
$nom = $email = $age = "";
$erreurs = [];

// TODO 1 : Vérifier que le formulaire a été soumis

    // TODO 2 : Récupérer les données avec filter_input()
    // - Nettoyer le nom avec FILTER_SANITIZE_SPECIAL_CHARS
    // - Valider l'email avec FILTER_VALIDATE_EMAIL
    // - Valider l’âge (entier entre 13 et 120)

    // TODO 3 : Ajouter des messages d’erreur si les champs sont invalides

    // TODO 4 : Afficher un message de confirmation si tout est bon
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire filtré</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f2f2f2;
            padding: 30px;
        }
        form {
            background: white;
            padding: 20px;
            max-width: 400px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        input[type="submit"] {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        .erreur {
            color: red;
            font-size: 0.9em;
            margin-top: -10px;
            margin-bottom: 10px;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($erreurs)) : ?>
    <div class="success">
        <p><strong>Formulaire envoyé avec succès !</strong></p>
        <p>Nom : <?= htmlspecialchars($nom) ?></p>
        <p>Email : <?= htmlspecialchars($email) ?></p>
        <p>Âge : <?= htmlspecialchars($age) ?></p>
    </div>
<?php endif; ?>

<form method="post">
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

</body>
</html>
