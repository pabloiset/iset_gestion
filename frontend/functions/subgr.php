<?php

echo '
<div class="col-sm-6" id="periodo">
                                <div class="form-group">
                                    <label for="modal_contact_lastname">Grado</label>
                                    <div class="input-group">
<select name="iddeg" class="form-control">
';
require '../../backend/bd/ctconex.php'; 

$stmt = $connect->prepare('SELECT subgrade.idsub, subgrade.nomsub, degree.iddeg, degree.nomgra, subgrade.state FROM subgrade INNER JOIN degree ON subgrade.iddeg = degree.iddeg');
$stmt->execute();
echo '<option value="0">--Seleccione una subgrado--</option>';

 	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
         {
           
         if($row['iddeg'] == $_GET['c']){
			echo "<option value='".$row['idsub']."'>".$row['nomsub']."</option>";;
		}


        	 ?>
       		 
           <?php
        }
        echo '
        </div>
                                </div>
                            </div>
        </select>
        ';
  

 ?>



