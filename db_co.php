<?php

    //$host = 'lb221694-001.eu.clouddb.ovh.net';
    //$bdd = 'ProjetsSIO2023';
    //$identifiant = 'adminSIO';
    //$mdp = 'BTSsio2022';

    $host = 'localhost';
    $bdd = 'espace_membres';
    $identifiant = 'root';
    $mdp = '';
 
    // essaie quelque chose
    try{
        // connexion à la base de données
    $co = new PDO('mysql:host='.$host.';port=3306;dbname='.$bdd, $identifiant, $mdp);

        //$co = new PDO('mysql:host='.$host.';port=35508;dbname='.$bdd, $identifiant, $mdp)
    }
    // Si le try ne fonctionne pas :
    catch(Exception $e){
        echo $e->getMessage();
        die();

    }


?>