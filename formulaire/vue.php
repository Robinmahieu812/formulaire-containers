<!-- Affichage -->
<!DOCTYPE html>
  <meta http-equiv="Content-Type" content="text/html; charset= UTF-8" />
  <meta charset="utf-8"/>
<html>
<head>
    <title>Le formulaire</title>
</head>
<body>
   <p>Le formulaire.</p> 
<form method="post" action="controleur.php" >
    Nom:    <input type="text" name="nom" /><br />
    Prénom: <input type="text" name="prenom" /><br />
    Année:  <select name="annee">
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
            <?php
            foreach ($lesregions as $array): ?>
            <option value="<?php echo ($array['region']); ?>"><?php echo ($array['region']);?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="OK" name="validation"/>
</form>
</body>
</html>