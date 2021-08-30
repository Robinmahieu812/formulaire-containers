<!DOCTYPE html>
<meta http-equiv="Content_Type" contant="text/html; charset= UTF-8" />
<?php
    mb_internal_encoding('UTF-8');
?>
<html>
    <body>
    <h1>Informations saisies</h1>

    <?php
    if (isset($_POST["nom"], $_POST["prenom"])) {
        echo "Nom: ".$_POST["nom"]."<br />";
        echo "Prénom: ".$_POST["prenom"]."<br />";
        echo "Année: ".$_POST["annee"]."<br />";
        echo "Region: ".$_POST["region"]."<br />";
    }
    ?>
