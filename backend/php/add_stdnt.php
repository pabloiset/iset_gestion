<?php 
require_once('../../backend/bd/ctconex.php'); 
 if(isset($_POST['staddstud']))
 {
  //$username = $_POST['user_name'];// user name
  //$userjob = $_POST['user_job'];// user email
    $dnist=trim($_POST['txtdnist']);
    $nomstu=trim($_POST['txtnamst']);
    $edast=trim($_POST['txtedst']);
    $direce=trim($_POST['txtdirst']);
    $correo=trim($_POST['txtcorst']);
    $sexes=trim($_POST['txtsest']);
    $fenac=trim($_POST['txtnacst']);
    

    $imgFile = $_FILES['foto']['name'];
    $tmp_dir = $_FILES['foto']['tmp_name'];
    $imgSize = $_FILES['foto']['size'];

    
   
    
  if(empty($dnist)){
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

   
  $stmt = "SELECT * FROM students WHERE dnist ='$dnist'";
   if(empty($dnist)) {
             echo '<script type="text/javascript">
swal("Error!", "Ya existe el registro a agregar!", "error").then(function() {
            window.location = "../alumnos/nuevo.php";
        });
        </script>';


         }

         else
         {  // Validaremos primero que el document no exista
            $sql="SELECT * FROM students WHERE dnist ='$dnist'";
            

            $stmt = $connect->prepare($sql);
            $stmt->execute();

            if ($stmt->fetchColumn() == 0) // Si $row_cnt es mayor de 0 es porque existe el registro
            {
                if(!isset($errMSG))
  {
$stmt = $connect->prepare("INSERT INTO students(dnist,nomstu, edast,direce,correo,sexes,fenac,foto,state) VALUES(:dnist,:nomstu,:edast,:direce,:correo,:sexes,:fenac,:foto,'1')");
$stmt->bindParam(':dnist',$dnist);
$stmt->bindParam(':nomstu',$nomstu);
$stmt->bindParam(':edast',$edast);
$stmt->bindParam(':direce',$direce);
$stmt->bindParam(':correo',$correo);
$stmt->bindParam(':sexes',$sexes);
$stmt->bindParam(':fenac',$fenac);
$stmt->bindParam(':foto',$foto);



   if($stmt->execute())
   {
    echo '<script type="text/javascript">
swal("¡Registrado!", "Se agrego correctamente", "success").then(function() {
            window.location = "../alumnos/mostrar.php";
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
            window.location = "../alumnos/nuevo.php";
        });
        </script>';

 // if no error occured, continue ....

}
  

  }
 
 }
?>