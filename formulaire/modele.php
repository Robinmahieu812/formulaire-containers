<!-- Accès aux données-->
<?php

//Connexion à la base
function getBdd() {
try
{
    $bdd = new PDO('mysql:host=localhost:3307;dbname=gestion_containers;charset=utf8', 'root', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
return $bdd; 
}
//Renvoie la liste de toutes les régions, triés par nom décroissant

function getRegions() {
    $bdd=getBdd();
    $lesregions = $bdd->query('select id_region as id, region as region from region order by region desc');
    return $lesregions;
}
//Renvoie la liste de tous les départements, triés par nom décroissant

function getNomDepartements($region) {
    $bdd=getBdd();
    $rqt = $bdd->prepare('select id_departement as id,departementNom  from departement where region_id_region=?');
    $rqt->execute(array($region));
    $lesdepartementderegion=$rqt->fetchAll(PDO::FETCH_ASSOC);
    return $lesdepartementderegion;
}

function getNomRegion($region){
    $bdd=getBdd();
    $rqt=$bdd->prepare('select*from region where id_region = ?');
    $rqt->execute(array($region));
    $nomRegion=$rqt->fetchAll();
    return $nomRegion[0][1];
}
function getPortDepartement($id_departement){
    $bdd=getBdd();
    $rqt = $bdd->execute(array($id_departement));
    $lesPortsDuDepartement=$rqt->fetchAll(PDO::FETCH_ASSOC);
    return $lesPortsDuDepartement;
}
//Renvoie les noms de la région et du département choisi

function getNomRegionDepartement($id_departement){
    $bdd=getBdd();
    $rqt = $bdd->prepare('SELECT region.region,departement.nom_departement,departement.id FROM region');
    $rqt->execute(array($id_departement));
    $nomRegionDepartement=$rqt->fetchAll();
    return $nomRegionDepartement;
}
function setPortDepartement($idDepartement,$nomPort){
    $bdd=getBdd();
    $rqt = $bdd->prepare('INSERT INTO port (id_departement, nom_Port) VALUES(?,?);');
    $rqt->execute(array($idDepartement,$nomPort));
}
function getContainerPort($id_port){
    $bdd=getBdd();
    $rqt=$bdd->prepare('select containers.id_container,BICCODE,taille,volume,date_stock from containers,stocker where stocker.id_container and stocker.id_port =?');
    $rqt->execute(array($id_port));
    $lesContainersDuPort=$rqt->fetchAll(PDO::FETCH_BOTH);
    return $lesContainersDuPort;
}
function getContainerPresentPort($id_port){
    $bdd=getBdd();
    $rqt=$bdd->prepare('SELECT containers.id_containers,BICCODE,taille,volume,date_stock,date_depart FROM conatiners,stocker WHERE stocker.id_container=containers.id_container AND stocker.id_port=? AND stocker.date_depart=0 ORDER BY BICCODE ASC');
    $rqt->execute(array($id_port));
    $lesContainersSurPort=$rqt->fetchAll(PDO::FETCH_BOTH);
    return $lesContainersSurPort;
}
?>