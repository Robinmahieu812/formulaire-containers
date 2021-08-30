<?php
    mb_internal_encoding('UTF-8');
?>

<html>
    <body>
    <h1>Informations saisies</h1>
    <?php
        echo "Nom: ".$_POST["nom"]."<br />";
        echo "Prénom: ".$_POST["prenom"]."<br />";
    ?>
    </body>
</html>
