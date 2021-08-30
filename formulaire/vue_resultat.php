<html>
    <body>
    <h1>Informations saisies</h1>

    <?php
        echo "Nom: ".$_POST["nom"]."<br />";
        echo "Prénom: ".$_POST["prenom"]."<br />";
        echo "Année: ".$_POST["annee"]."<br />";
        echo "Région: ".$_POST["region"]."<br />";
    ?>
    <br /> Retour au formulaire,
    <a href="controleur.php"> Cliquez ici
    </body>
</html>
