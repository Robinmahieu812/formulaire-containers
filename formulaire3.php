<select name="annee">
<?php
for($i=1970; $i<=date("Y"); $i++) {
    echo '<option value"', $i ,'"> ',$i ,'</option>';
}
if ($i == date('Y')-20) {        //L'année est-elle l'année courante ?
    echo '<option value="', $i ,'"','selected','> ',$i ,'</option>';
}
?>
</select>
<select name="region">
    <option value="Choix">Selectionnez...</option>
    <option value="01">Alsace</option>
    <option value="02">Aquitaine</option>
    <option value="03">Auvergne</option>
</select>