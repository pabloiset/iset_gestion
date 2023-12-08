<?php 
require_once('../../backend/bd/ctconex.php'); 
 if(isset($_POST['staddtea']))
 {
  //$username = $_POST['user_name'];// user name
  //$userjob = $_POST['user_job'];// user email
    $dnite=trim($_POST['txtdnite']);
    $nomte=trim($_POST['txtnamte']);
    $sexte=trim($_POST['txtstte']);
    $correo=trim($_POST['txtcorte']);
    $telet=trim($_POST['txttete']);
   
    $imgFile = $_FILES['foto']['name'];
    $tmp_dir = $_FILES['foto']['tmp_name'];
    $imgSize = $_FILES['foto']['size'];

    
   
    
  if(empty($dnite)){
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

   
  $stmt = "SELECT * FROM teachers WHERE dnite ='$dnite'";
   if(empty($dnite)) {
             echo '<script type="text/javascript">
swal("Error!", "Ya existe el registro a agregar!", "error").then(function() {
            window.location = "../alumnos/nuevo.php";
        });
        </script>';


         }

         else
         {  // Validaremos primero que el document no exista
            $sql="SELECT * FROM teachers WHERE dnite ='$dnite'";
            

            $stmt = $connect->prepare($sql);
            $stmt->execute();

            if ($stmt->fetchColumn() == 0) // Si $row_cnt es mayor de 0 es porque existe el registro
            {
                if(!isset($errMSG))
  {
$stmt = $connect->prepare("INSERT INTO teachers(dnite,nomte, sexte,correo,telet,foto,state) VALUES(:dnite,:nomte,:sexte,:correo,:telet,:foto,'1')");
$stmt->bindParam(':dnite',$dnite);
$stmt->bindParam(':nomte',$nomte);
$stmt->bindParam(':sexte',$sexte);
$stmt->bindParam(':correo',$correo);
$stmt->bindParam(':telet',$telet);
$stmt->bindParam(':foto',$foto);




   if($stmt->execute())
   {
    echo '<script type="text/javascript">
swal("¡Registrado!", "Se agrego correctamente", "success").then(function() {
            window.location = "../docentes/mostrar.php";
        });
        </script>';
   }
   else
   {
    $errMSG = "error while inserting....";
   }

  } 
            }

                else{

                     echo '<script type="text/javascript">
swal("Error!", "No se pueden agregar datos,  comuníquese con el administrador ", "error").then(function() {
            window.location = "../docentes/nuevo.php";
        });
        </script>';

 // if no error occured, continue ....

}
  

  }
 
 }
?>