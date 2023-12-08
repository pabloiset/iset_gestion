 <?php 
 require '../../backend/bd/ctconex.php';
 echo '<option value="0">Seleccione el docente</option>';
 $stmt = $connect->prepare('SELECT * FROM teachers');

  $stmt->execute();


  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $idtea; ?>"><?php echo $nomte; ?></option>

            <?php
        }

  ?>
