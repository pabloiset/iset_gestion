<?php
if(isset($_POST['delour'])){
////////////// Actualizar la tabla /////////
$consulta = "DELETE FROM `events` WHERE `idsub`=:idsub";
$sql = $connect-> prepare($consulta);
$sql -> bindParam(':idsub', $idsub, PDO::PARAM_INT);
$idsub=trim($_POST['txtidevent']);
$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo '<script type="text/javascript">
swal("¡Eliminado!", "Horario eliminado correctamente!", "success").then(function() {
            window.location = "../horarios/mostrar.php";
        });
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


 

