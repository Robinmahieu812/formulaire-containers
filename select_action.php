<?php
$loisirs = $_GET["loisirs"];
echo "<b>Vous aimez </b><br />";
for ($i=0; $i<count($loisirs); $i++) {
    echo $loisirs[$i]."<br />";
}
?>
<br />
Retour au formulaire,
<a href="select_3.html">Cliquez ici</a>