<?php
    try {
        $base = new PDO("mysql:host=localhost; dbname=personal_ketrika","root","");
    }
    catch(exeption $e) {
        die("Erreur".$e->getMessage());
    }

?>                   