 <?php 
 require '../../backend/bd/ctconex.php';
 echo '<option value="0">Seleccione periodo</option>';
 $stmt = $connect->prepare('SELECT * FROM period group by idper desc');

  $stmt->execute();


  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $idper; ?>"><?php echo $numperi; ?></option>

            <?php
        }

  ?>
