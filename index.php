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

   <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
include 'formulaire.php';
include '/src/formvalidator.php';
?>

</body>
</html>
