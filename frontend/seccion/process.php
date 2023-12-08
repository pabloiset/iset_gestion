

<?php
    
        $trat1=$_POST['txtidalm'];
        
        
////////////// Insertar a la tabla la informacion generada /////////

       

$sql="DELETE FROM alum_secc WHERE idaluse = $trat1";
 $connect->exec($sql);
echo 'Agregado correctamente';




?>