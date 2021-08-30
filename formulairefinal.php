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
    <title>Formulaire final</title>
</head>
<body>
   <p>Veuillez vous identifier</p> 
<form method="post" action="formulaire_action.php" >
    Nom :    <input type="text" name="nom" /><br />
    Prénom : <input type="text" name="prenom" /><br />
    Année :  <select name="annee">
        <?php
        for($i=1970; $i<=date("Y"); $i++) {
            if($i == date('Y')-20)  {                      //L'année est-elle l'année courante ?
                echo '<option value="',$i,'"','selected' ,'>',$i,'</option>';
            }
            echo '<option value="',$i,'">',$i,'</option>';
        }
        ?>
        </select>
        <br />
        <p> Region :
        <select name="region" id="region">
            <option value="Choix">Selectionnez...</option>
<!-- requete à la base de données -->
<?php
$region = $bdd->query('select * from region');
?>           
            <?php
            foreach ($region as $array): ?>
               <option value="<?php echo ($array['region']); ?>"><?php echo ($array['region']);?></option>
    <?php endforeach; ?>
</select>
<input type="submit" value="OK" />
</form>
</body>
</html>