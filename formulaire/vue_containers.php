<table>
      <tr class="ligne-titre">
      <td> BICCODE         </td>
      <td> Taille          </td>
      <td> Volume          </td>
      <td> Date arrivée    </td>
      <td> Date départ     </td>
      </tr>
<?php foreach ($lesContainersSurPort as $item):?>
      <td>  <?= $item[1] ?> </td>
      <td>  <?= $item[2] ?> </td>
      <td>  <?= $item[3] ?> </td>
      <td>  <?= $item[4] ?> </td>
      <td>  <?= $item[5] ?> </td>
      <td>  <form method="post" action="index.php">
                <input type="hidden" name="id_cont" value=<?= $item[0]?>>
                <input type="hidden" name="id_port" value=<?= $nomRegionDepartementPort[0][3]?>>
                <input type="submit" value="Depart" name="action" class="boutonDepart"/>
            </form></td>
        </tr>
 <?php endforeach; ?>
</table>
