<?php 
    require "config.php";

    ### Exercice 2.1 : `if / elseif / else`
    function mention($note){
        if ($note >= 16) {
        return "Tres bien";
        } elseif ($note >= 14) {
            return "Bien";
        } elseif ($note >= 12) {
            return "Assez bien";
        } elseif ($note >= SEUIL) {
            return "Passable";
        } else {
            return "Ajourne";
        }
    };
    $note = array(15,10,19,4);
    foreach($note as $a){
        echo 'note '.$a.' : '.mention($a).'<br>';
    }
    '<br><br>';

    ### Exercice 2.2 : `switch`

    $mois = (int) date("m");

    switch ($mois) {
        case 1: 
            echo "Janvier";
            break;
        case 2:
            echo "Fevrier";
            break;
        case 3:
            echo "Mars";
            break;
        case 4:
            echo "Avril";
            break;
        case 5:
            echo "Mai";
            break;
        case 6:
            echo "Juin";
            break;
        case 7:
            echo "Juillet";
            break;
        case 8:
            echo "Aout";
            break;
        case 9:
            echo "Septembre";
            break;
        case 10:
            echo "Octobre";
            break;
        case 11:
            echo "Novembre";
            break;
        case 12:
            echo "Decembre";
            break;
        default:
             echo "Erreur";
    }
        /* si on oublie break lorsque il arrive 
      au mois qu'on veut il affiche la et continue l'execution du code vers la premier break rencontre*/
      
    ### Exercice 2.3 : Boucles

    for($i=0;$i<=6;$i++){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo '<br>';
    }

    $x = 0;
    while($x<=20){
        if($x==10){
            echo '<strong>'.$x.'</strong><br>';
        }
        else{
            echo $x.'<br>';
        }
        $x+=2;
    }
    for($i=0;$i<=10;$i++){
        if($i%2==0){
            echo $i.'<br>';
        }
    }

    $i = 1;

    while (true) {
        switch ($i) {
            case 5:
                echo 'At 5<br>';
                break;
            case 10:
                echo 'At 10; quitting<br>';
                break 2;
            default:
                echo $i.'br>';
        }
        $i++;
    }

    $i = 0;
    do {
        if ($i == 10) {
            echo '<strong>'.$x.'</strong><br>';
        } else {
            echo $i.'<br>' ;
        }
        $i += 2;
    } while ($i <= 20);
    # la difference est que do while execute les instructions au moins une seule fois apres il verifie la condition l'oppose de while
?>