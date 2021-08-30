<!-- Affichage-->
<?php mb_internal_encoding('UTF-8');?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
   <head>
      <link rel="stylesheet" href="style.css" />
      <title>Les régions</title>
   </head>
   <body>
      <p>Choisissez la région</p>
      <form method="get" action="index.php">
          <select name="id_region" id="id_region"> '
              <option value="Choix">Selectionnez...</option> '
              <?php
              foreach ($lesregions as $item): ?>
                  <option value="<?php echo ($item['id']);?>"><?php echo ($item['region']); ?></option>
              <?php endforeach; ?>
            </select>
        <input type="submit" value="Afficher" name="action" />
        </form>
    </body>
</html>
