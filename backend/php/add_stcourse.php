<?php 
require_once('../../backend/bd/ctconex.php'); 
if(isset($_POST['staddcourse'])){
///////////// Informacion enviada por el formulario /////////////
    $nomcur=$_POST['txtnamcour'];
    $idper=$_POST['txtnper'];
    $iddeg=$_POST['txtgrd'];
    $idsub=$_POST['txtsgrd'];
    $idtea=$_POST['txtdoc'];

    $imgFile = $_FILES['foto']['name'];
    $tmp_dir = $_FILES['foto']['tmp_name'];
    $imgSize = $_FILES['foto']['size'];


    if(empty($nomcur)){
   $errMSG = "Please enter number.";
  }
    else
  {
   $upload_dir = '../../backend/img/subidas/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
   // rename uploading image
   $foto = rand(1000,1000000).".".$imgExt;
    
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '5MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$foto);
    }
    else{
     $errMSG = "Sorry, your file is too large.";
    }
   }
   else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   }
  }
///////// Fin informacion enviada por el formulario /// 

////////////// Insertar a la tabla la informacion generada /////////
$sql="insert into course(nomcur, idper,iddeg,idsub,idtea,foto,estado) 
values(:nomcur, :idper,:iddeg,:idsub,:idtea,:foto, 1)";
    
$sql = $connect->prepare($sql);
    
$sql->bindParam(':nomcur',$nomcur,PDO::PARAM_STR, 25);
$sql->bindParam(':idper',$idper,PDO::PARAM_STR, 25);
$sql->bindParam(':iddeg',$iddeg,PDO::PARAM_STR, 25);
$sql->bindParam(':idsub',$idsub,PDO::PARAM_STR, 25);
$sql->bindParam(':idtea',$idtea,PDO::PARAM_STR, 25);
$sql->bindParam(':foto',$foto,PDO::PARAM_STR, 25);

//$sql->bindParam(':rol',$rol,PDO::PARAM_STR);
    
$sql->execute();

$lastInsertId = $connect->lastInsertId();
if($lastInsertId>0){

    echo '<script type="text/javascript">
swal("¡Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "../cursos/nuevo.php";
        });
        </script>';
}
else{
    

 echo '<script type="text/javascript">
swal("Error!", "No se pueden agregar datos,  comuníquese con el administrador ", "error").then(function() {
            window.location = ../cursos/"nuevo.php";
        });
        </script>';

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>