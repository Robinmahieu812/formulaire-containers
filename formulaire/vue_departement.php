<!--Affichage-->
<?php mb_internal_encoding('UTF-8');?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
    <head>
        <link rel="stylesheet" href="style.css" />
        <title>Les  Personnes</title>
    </head>
    <body>
        <header>
           <h2>La liste des départements de la region 
               <?php
               echo"".$nomRegion;
               ?>
               est:</h2>
        </header>
        <p>Choississez le departement </p>
         <form method="post" action="index.php">
             <select name="id_departement" id="id_departement">'
                 <option value="Choix">Selectionnez...</option>'
                 <?php
                 foreach ($lesdepartementderegion as $item): ?>
                     <option value="<?php echo ($item['id']); ?>"><?php echo ($item['departementNom']); ?></option>
                 <?php endforeach; ?>
            </select>
            <input type="submit" value="AfficherPort" name="action" />
        </form>
    </body>
</html>
