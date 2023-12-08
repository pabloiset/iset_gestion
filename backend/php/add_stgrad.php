<?php 
require_once('../../backend/bd/ctconex.php'); 
if(isset($_POST['staddgrde'])){
///////////// Informacion enviada por el formulario /////////////
    $idper=$_POST['txtprd'];
    $nomgra=$_POST['txtnamgrd'];
    
///////// Fin informacion enviada por el formulario /// 

////////////// Insertar a la tabla la informacion generada /////////
$sql="insert into degree(idper, nomgra,state) 
values(:idper, :nomgra, 1)";
    
$sql = $connect->prepare($sql);
    
$sql->bindParam(':idper',$idper,PDO::PARAM_STR, 25);
$sql->bindParam(':nomgra',$nomgra,PDO::PARAM_STR, 25);

//$sql->bindParam(':rol',$rol,PDO::PARAM_STR);
    
$sql->execute();

$lastInsertId = $connect->lastInsertId();
if($lastInsertId>0){

    echo '<script type="text/javascript">
swal("¡Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "../grado/mostrar.php";
        });
        </script>';
}
else{
    

 echo '<script type="text/javascript">
swal("Error!", "No se pueden agregar datos,  comuníquese con el administrador ", "error").then(function() {
            window.location = ../grado/"mostrar.php";
        });
        </script>';

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>