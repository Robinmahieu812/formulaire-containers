<!-- Controle -->
<?php
include ('modele.php');

function accueil() {
    $lesregions=getRegions();
    require 'vue_regions.php';
}

function departement($region){
    $lesdepartementderegion = getNomDepartements($region);
    $nomRegion=getNomRegion($region);
    require 'vue_departement.php';
}
function erreur($msgErreur){
    require 'vue_erreur.php';
}
// Affiche les départements de la région
function port($departement){
    $lesPortsDuDepartement = getPortDepartement($departement);
    require 'vue_port.php';
}
function ajouterPort($idDepartement){
    require 'vue_ajouterPort.php';
}
function validezAjoutPort($idDepartement,$nomPort){
    setPortDepartement($idDepartement,$nomPort);
    $lesPortsDuDepartement= getPortDepartement($idDepartement);
    $nomRegionDepartement=getNomsRegionDepartement($idDepartement);
    require 'vue_port.php';
}
//Affiche les container du port
function container($port){
    $lesContainersDuPort= getContainerPort($port);
    $nomRegionDepartementPort=getNomsRegionDepartemantPort($port);
    require 'vue_containers.php'
}
?>