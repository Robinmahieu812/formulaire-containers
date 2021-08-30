<!--connexion à la base de données-->
<?php
try 
{    
    $bdd = new PDO('mysql:host=127.0.0.1:3307; dbname=gestion_containers; charset=utf8', 'root', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>


<!-- Affichage -->
<!DOCTYPE html>
  <meta http-equiv="Content_Type" contant="text/html; charset= UTF-8" />
  <meta charset="utf-8"/>
<html>
<head>
    <title>Les régions</title>
</head>
<body>
    <?php
    foreach ($lesregions as $item); ?>
      <p> <?=$item['id_region']?>-<?=$item['region']?></p>
<?php endforeach; ?>
</body>
</html>

<!--requete de la base de données-->
<?php
    $regioninf=1;
    $regionsup=10;
    $lesregions= $bdd->prepare('select * from region where id_region < ? ');
    $lesregions->execute(array($regioninf,$regionsup));
?>

<!--requete de la base de données-->
<?php
    $nom="maRegion";
    $stmt = $bdd->prepare("INSERT INTO region(region) VALUES(?)");
    $stmt->execute(array($nom));
?>

<!--requete de la base de données-->

<?php
$lesregions =$bdd->query('select * from region');
?>
<?php
    $nom="monAutreRegion";
    $stmt = $bdd->prepare("INSERT INTO region(region) VALUES(:nom)");
    $stmt->execute(array('nom' => $nom ));
?>

<!--requete de la base de données-->
<?php
    $nom="monAutreRegion";
    $stmt = $bdd->prepare("DELETE FROM region WHERE (id_region = ?);");
    $stmt->execute(array($id));
?>

<!--requete de la base de données-->
<?php
    $nom="maBelleRegion";
    $id=23;
    $stmt = $bdd->prepare("UPDATE region SET region=? where id_region=?");
    $stmt->execute(array($nom,$id));
?>

<!--requete de la base de données-->
<?php
$lesregions = $bdd->query('select * from region');
?>