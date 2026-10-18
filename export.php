<?php
    require_once 'config.php';

    $fich = 'data/notes.csv';

    if (!file_exists($fich)) {
        echo "Le fichier $fich n'existe pas";
        exit;
    }

    $resul = [];
    $f = fopen($fich, 'r');
    while (($ligne = fgetcsv($f, 0, ';')) !== false) {
        if ($ligne === [null]) {
            continue;
        }
        [$nom, $info, $math] = $ligne;
        $resul[] = [
            'nom'     => $nom,
            'info'    => (float) $info,
            'math'    => (float) $math,
            'moyenne' => ($info + $math) / 2
        ];
    }
    fclose($f);

    $json = json_encode($resul);
    file_put_contents('data/notes.json', $json);
    echo "Fichier data/notes.json cree<br>";

    $contenu = file_get_contents('data/notes.json');
    $tableau = json_decode($contenu, true);
    echo "<pre>";
    print_r($tableau);
    echo "</pre>";

    echo "<h3>serialize()</h3>";
    echo "<pre>" . htmlspecialchars(serialize($resul)) . "</pre>";

    echo "<h3>json_encode()</h3>";
    echo "<pre>" . htmlspecialchars(json_encode($resul)) . "</pre>";

    # lequel de ces formats est directement exploitable par une application JavaScript : JSON
?>