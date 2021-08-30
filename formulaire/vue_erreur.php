<!-- Affichage -->
<?php mb_internal_encoding('UTF-8');?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
  <head>
    <link rel="stylesheet" href="style.css" />
    <title></title>
</head>
<body>
   <div id="global">
     <header>
       <p>La liste des regions.</p>
    </header>
    <div id="contenu">
          <p> <?php echo 'Une erreur est survenue a:';?> </p>
          <?= $msgErreur ?></p>
    </div> <!-- #contenu -->
    <footer id="piedFormulaire">
       Page réalisée avec PHP, HTML5 et CSS.
    </footer>
    </div><!--#global-->
</body>
</html>