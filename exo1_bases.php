<?php echo 'Hello PHP';
// premier commentaire
# deuxieme commentaire 
/* commentaire 
sur plusieurs */
?>
<?php 
    // $x       : valide
    // $_x      : valide
    // $2x      : invalide car il commence par un nombre
    // $x-y     : invalide car le tiret est comme un caractere special
    // $Prix_HT : valide
    // $prix ht : invalide car l'espace lu comme un caractere special
    // $état    : valide les caracteres accentues sont acceptes par PHP
    $x = 5;
    $_x = 7;
    $Prix_HT = 50;
    $état = "inconnue" ;
    /* dans php il est sensible a la case memoire a 
    a son propre encodage et A son propre encodage comme deux caracere different */


    require "config.php" ;

    echo "Etablissement : " . ETABLISSEMENT . "<br>";
    echo "Note min : " . NOTE_MIN . "<br>";
    echo "Note max : " . NOTE_MAX . "<br>";
    echo "Seuil : " . SEUIL . "<br>";

    var_dump(defined("SEUIL"));
    var_dump(defined("INCONNUE"));
    
    // question 1 : un erreur va affiche 
    /* question 2 : pour declarer const il faut declareau plus haut niveau du contexte, 
        car elles seront définies au moment de la compilation
        tandis que defined il y a pas de probleme a l'emplacement de son declaratoon */
    
        
    $prix_ht = 60;
    $tva = 20;
    $prix_TTC = $prix_ht * (1 + ($tva / 100)); 
    echo "Le prix TTC du produit est de ".$prix_TTC." €";

    // Exercice 1.4 : Types et conversions:

    $test = 42;
    $test = (string) 42;
    var_dump($test);

    var_dump((bool) 0);
    var_dump((bool) 0.0);
    var_dump((bool) "0");
    var_dump((bool) ""); 
    var_dump((bool) "abc");
    var_dump((bool) []);
    var_dump((bool) null);

    var_dump((int) 3.9);
    var_dump((int) "12abc");
    var_dump((float) "1.5e3");
    var_dump((int) true);

    $dec = 255;
    $hex = 0xFF;
    $oct = 0377;
    $bin = 0b11111111;
    echo "Decimal : ".$dec."<br>";
    echo "Hexadecimal : ".$hex."<br>";
    echo "Octal : ".$oct."<br>";
    echo "Binaire : ".$bin."<br>";

    // Exercice 1.5 : Chaînes de caractères:
    $traitees = "egales a ";
    $ici = 2;
    echo 'Ahmed a dit : "j\'ai reussi" <br>';
    echo 'Voulez-vous supprimer C:\*.*? <br>';
    echo 'Ceci n\'affichera pas \n de nouvelle ligne <br>';
    echo 'Les variables ne seront pas $traitees $ici <br>';
    echo 'Les variables seront '.$traitees .$ici.'<br> <br>';

    $a = "*Bonjour les développeurs*";
    echo trim($a,"*");
    
    for($i=0; $i<strlen($a); $i++){
        echo $a[$i].'<br>';
    }
?>