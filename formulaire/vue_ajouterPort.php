<?php mb_internal_encoding('UTF-8');?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" contet="text/html; charset UTF-8"/>
<html>
<head>
    <title>Formulaire Ajout Port</title>
</head>
<body>
    <p>Veuillez entrer les informations sur le port</p>
    <form method="post" action="index.php">
        <input type="hidden" name="id_departement" value=<?=$_POST['id']?> ><br/>
        Port :<input type="text" name="nom_port"><br/>
        <br/>
        <input type="submit" value="ValiderPort" name="action"/>
    </form>    
</body>
</html>