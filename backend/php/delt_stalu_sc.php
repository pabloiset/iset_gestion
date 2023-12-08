<?php
if(isset($_POST['delalum'])){
////////////// Actualizar la tabla /////////
$consulta = "DELETE FROM `alum_secc` WHERE `idaluse`=:idaluse";
$sql = $connect-> prepare($consulta);
$sql -> bindParam(':idaluse', $idaluse, PDO::PARAM_INT);
$idaluse=trim($_POST['txtidalm']);
$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo '<script type="text/javascript">
swal("Eliminado!", "Eliminado correctamente!", "success");
        </script>';

}
else{
    echo '<script type="text/javascript">
 swal("Error!", "Error!", "error");
       
        </script>';

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>


 

