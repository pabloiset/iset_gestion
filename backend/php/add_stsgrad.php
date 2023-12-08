<?php 
require_once('../../backend/bd/ctconex.php'); 
if(isset($_POST['staddsgrde'])){
///////////// Informacion enviada por el formulario /////////////
    $nomsub=$_POST['txtnamgrd'];
    $iddeg=$_POST['txtgrd'];
   
///////// Fin informacion enviada por el formulario /// 

////////////// Insertar a la tabla la informacion generada /////////
$sql="insert into subgrade(nomsub, iddeg,state) 
values(:nomsub, :iddeg, 1)";
    
$sql = $connect->prepare($sql);
    
$sql->bindParam(':nomsub',$nomsub,PDO::PARAM_STR, 25);
$sql->bindParam(':iddeg',$iddeg,PDO::PARAM_STR, 25);

//$sql->bindParam(':rol',$rol,PDO::PARAM_STR);
    
$sql->execute();

$lastInsertId = $connect->lastInsertId();
if($lastInsertId>0){

    echo '<script type="text/javascript">
swal("¡Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "../subgrado/mostrar.php";
        });
        </script>';
}
else{
    

 echo '<script type="text/javascript">
swal("Error!", "No se pueden agregar datos,  comuníquese con el administrador ", "error").then(function() {
            window.location = ../subgrado/"mostrar.php";
        });
        </script>';

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>