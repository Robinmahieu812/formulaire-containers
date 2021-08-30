<?php
require 'controleur.php';
try{
    accueil();
    if (isset($_GET['action'])){
        if ($_GET['action'] == 'Afficher'){
            if (isset($_GET['id_region'])){
                $idRegion = intval($_GET['id_region']);
                if($idRegion !=0)
                {
                    departement($idRegion);
                }
                else 
                    throw new Exception("Identifiant de région non valide");
            }
            else
                throw new Exception("Choississez une région !");
        }
        elseif($_POST['action']== 'AfficherPort'){
            if (isset($_POST['id'])){
                $idDepartement = intval($_POST['id']);
                if ($idDepartement !=0)
                {
                    port($idDepartement);
                }
                elseif($_POST['action']== 'ValiderPort'){
                             $idDepartement = intval($_POST['id']);
                             ajouterPort($idDepartement);
                }
                elseif($_POST['action']=='ValiderPort'){
                    if (isset($_POST['id'])){
                        $idDepartement = intval($_POST['id']);
                        $nomPort=$_POST['nom_port'];
                        if ($idDepartement !=0 && isset($_POST['nom_port']))
                        {
                            validerAjoutPort($idDepartement,$nomPort);
                        }
                        elseif($_POST['action']=='AfficherContainers'){
                            if (isset($_POST['id_port'])){
                                $idPort = intval($_POST['id_port']);
                                if ($idPort !=0)
                                {
                                    container($idPort);
                                }
                                else
                                    throw new Exception("Pas de container dans ce port");
                            }
                            else
                                throw new Exception("Choississez un port !");
                        }
                        else 
                            throw new Exception("renseigner tous les champs ! ");
                }
                else
                    throw new Exception("Pas de port dans ce département");
            }
             else
               throw new Exception("Choississez un département !");
        }
        else 
            throw new Exception("Action non valide");
    }
    else
      acceuil();
}
catch(Exception $e){
    erreur($e->getMessage());
}
?>