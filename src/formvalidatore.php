<?php
class FormValidator {

    public function validerNom($nom) {
        $verifNom = filter_var($nom, FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($verifNom)) {
            return 'Erreur : nom invalide.';
        }
        return true;
    }

    public function validerEmail($email) {
        $verifEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if ($verifEmail === false) {
            return 'Erreur : email invalide.';
        }
        return true;
    }

    public function validerAge($age) {
        $verifAge = filter_var($age, FILTER_VALIDATE_INT);
        if ($verifAge === false) {
            return 'Erreur : âge invalide.';
        }
        if ($verifAge < 13 || $verifAge > 130) {
            return "Erreur : l'âge doit être entre 13 et 130 ans.";
        }
        return true;
    }

    public function validerFormulaire($nom, $email, $age) {
        $resultNom = $this->validerNom($nom);
        $resultEmail = $this->validerEmail($email);
        $resultAge = $this->validerAge($age);

        if ($resultNom === true && $resultEmail === true && $resultAge === true) {
            return "Tout est correct !";
        }

        // Afficher les erreurs une par une
        if ($resultNom !== true) {
            echo $resultNom . "\n";
        }
        if ($resultEmail !== true) {
            echo $resultEmail . "\n";
        }
        if ($resultAge !== true) {
            echo $resultAge . "\n";
        }
    }
}
