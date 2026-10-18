<?php 
    require "config.php";

    $fich = 'data/notes.csv';
    if(!file_exists($fich)){
        echo 'le fichier n\'existe pas';
        exit;
    }
    
?>