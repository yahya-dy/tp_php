<?php 
    require "config.php";
    ### Exercice 3.1 : Création

    $notes = [
        "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
        "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
        "Hamza" => 7, "Sami" => 7, "Noura" => 14
    ];
    $modules = [
        "Analyse" , "Programmation PHP" , "Python"
    ];
    foreach($modules as $m){
        echo 'le module : '.$m.'<br>';
    };
    echo 'le module : '.$modules[0].'<br>';
    echo 'le module : '.$modules[1].'<br>';
    echo 'le module : '.$modules[2].'<br>';

    ### Exercice 3.2 : Affichage HTML
    echo '<table>';
    echo '<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>';
    foreach($notes as $nom => $note){
        $style = ($note < SEUIL) ? "style='color:red'" : "";
        echo "<tr$style>";
        echo '<tr>';
        echo '<td>'.$nom.'</td>';
        echo '<td>'.$note.'</td>';
        echo '<td>' . mention($note) . '</td>';
        echo '</tr>';
    };

    ### Exercice 3.3 : Statistiques

    $somme = 0;
    $c = 0;
    $max = 0;
    $min = 20;

    foreach ($notes as $note) {
        $somme += $note;
        $c++;
        if ($note > $max) {
            $max = $note;
        }
        if ($note < $min) {
            $min = $note;
        }
    }
    $moy = $somme / $c;

    echo '<br>Somme : '.$somme.'<br>';
    echo 'Moyenne : '.$moy.'<br>';
    echo 'Meilleur note : '.$max.'<br>';
    echo 'Plus faible note : '.$min.'<br>';

    echo 'array_sum : ' . array_sum($notes) . '<br>';
    echo 'Moyenne :' .array_sum($notes) / count($notes). '<br>';
    echo 'max : ' . max($notes) . '<br>';
    echo 'min : ' . min($notes) . '<br>';

    
    function afficher($x) {
        foreach ($x as $nom => $note) {
            echo $nom.' : '.$note.'<br>';
        }
    }

    $t = $notes;
    ksort($t);
    echo "<br>Noms croissants (ksort) :<br>";
    afficher($t);

    arsort($t);
    echo "<br>Notes décroissantes (arsort) :<br>";
    afficher($t);

    krsort($t);
    echo "<br>Noms décroissants (krsort) :<br>";
    afficher($t);

    asort($t);
    echo "<br>Notes croissantes (asort) :<br>";
    afficher($t);

    ### Exercice 3.5 : Opérateurs de tableaux
    $a = ["x" => 1, "y" => 2];
    $b = ["y" => 2, "x" => 1];

    echo '$a + $b : ';
    var_dump($a + $b);

    echo '<br>$a == $b : ';
    var_dump($a == $b);

    echo '<br>$a === $b : ';
    var_dump($a === $b);

    
?>