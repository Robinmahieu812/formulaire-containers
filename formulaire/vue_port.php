<!--Affichage-->
<?php mb_internal_encoding('UTF-8');?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
   <head>
      <link rel="stylesheet" href="style.css" />
      <title>Les Ports</title>
    </head>
    <body>
         <header>
            <h2>La liste des ports du departement de <?= $nomRegionDepartement[0][0]?> dans la region <?=$nomRegionDepartement[0][1]?> est:</h2>
          </header>
          <p>Choississez le port</p>
          <form method="post" action="index.php">
              <select name="id_port" id="id_port">'
                 <option value="Choix">Selectionnez...</option>'
                 <?php
                 foreach($lesPortsDuDepartement as $item):?>
                     <option value="<?php echo ($item['id']);?>"><?php echo ($item['nom_port']);?></option>
                 <?php endforeach;?>
              </select>
              <input type="submit" value="AfficherContainers" name="action"/>
              <input type="submit" value="AjouterPort" name="action"/>
              <input type="hidden" name="id_departement" value=<?=$nomRegionDepartement[0][2]?>/><br/>
               <?php
              foreach ($lesPortsDuDepartement as $item): ?>
              <h1 class="departement"><?=$item['id']?>-<?=$item['nom_port']?></h1>
              <hr/>
              <?php endforeach; ?>
          </form>
        <footer id="piedFormulaire">
          Page réalisée avec PHP, HTML5 et CSS.
        </footer>
      </div><!--#global-->
    </body>
  </html> 

