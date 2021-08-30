<!--connexion à la base de données-->

<?php
try 
{    
    $bdd = new PDO('serveur ;dbname=gestion_containers;charset=utf8', 'root', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage())
}
?>