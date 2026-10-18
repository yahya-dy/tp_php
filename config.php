<?php 
    const ETABLISSEMENT = "semlalia" ;
    define("NOTE_MIN",0);
    define("NOTE_MAX",20);
    define("SEUIL",10);
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
?>