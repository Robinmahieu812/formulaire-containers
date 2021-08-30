<!-- affichage -->
<?php mb_internal_encoding('UTF-8');?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
    <head>
        <link rel="stylesheet" href="style.css" />
        <title>Les régions</title>
    </head>
    <body>
        <div id="global">
            <header>
                <p>La liste des régions.</p>
            </header>
            <div id="contenu">
                <?php
                foreach ($lesregions as $item): ?>
                  <h1 class="region"> <?= $item['region'] ?>-<?= $item['region'] ?></h1>
                  <hr />
                <?php endforeach; ?>
            </div> <!-- #contenu -->
            <footer id="piedFormulaire">
                Page réalisée avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>


                