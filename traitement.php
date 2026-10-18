<?php
    require_once 'config.php';

    $erreurs = [];

    if (!isset($_POST['nom']) || empty(trim($_POST['nom']))) {
        $erreurs[] = "Le nom est obligatoire.";
    }
    if (!isset($_POST['note_info']) || $_POST['note_info'] === '') {
        $erreurs[] = "La note d'informatique est obligatoire.";
    }
    if (!isset($_POST['note_math']) || $_POST['note_math'] === '') {
        $erreurs[] = "La note de mathématiques est obligatoire.";
    }

    if (empty($erreurs)) {
        $nom       = trim($_POST['nom']);
        $note_info = $_POST['note_info'];
        $note_math = $_POST['note_math'];

        foreach (['informatique' => $note_info, 'mathématiques' => $note_math] as $mod => $n) {
            if (!is_numeric($n) || $n < NOTE_MIN || $n > NOTE_MAX) {
                $erreurs[] = "La note de $mod doit être comprise entre " . NOTE_MIN . " et " . NOTE_MAX . ".";
            }
        }
    }

    if (empty($erreurs)) {
        $f = fopen('data/notes.csv', 'a'); 
        // en mode w si on a le fichier deje et il y a des informations dedans avec w il efface ses informations puis ecrit depuis le debut
        fputcsv($f, [$nom, $note_info, $note_math], ';');
        fclose($f);
        $moyenne = ($note_info + $note_math) / 2;
        echo "<h2>Récapitulatif</h2>";
        echo "Nom : " . htmlspecialchars($nom) . "<br>";
        echo "Informatique : " . htmlspecialchars($note_info) . "<br>";
        echo "Mathématiques : " . htmlspecialchars($note_math) . "<br>";
        echo "Moyenne : " . round($moyenne, 2) . " (" . mention($moyenne) . ")<br>";
    } else {
        echo "<h2>Erreur</h2>";
        foreach ($erreurs as $e) {
            echo htmlspecialchars($e) . "<br>";
        }
        echo '<a href="saisie.html">Retour au formulaire</a>';
    }
    /*Avec GET les donnees sont ecrites dans l’URL tandis que POST  il chache les donnees donc pour un password il faut cache les donnees
    */
?>