<?php 
session_start();
// DANS CE FICHIER NOUS ALLONS CONFIGURER LA CONNEXION A LA BASE DE DONNEES
// Si vous etes sur mac, il faut rajouter "root" dans le $pass
$user = "root";
$pass = "";

// DBNAME = le nom de votre base de données, vérifiez bien que c'est le bon nom
$bdd = new PDO('mysql:host=localhost;dbname=exercicephp', $user, $pass);