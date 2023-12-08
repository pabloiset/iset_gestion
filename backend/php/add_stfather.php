<?php 
require_once('../../backend/bd/ctconex.php'); 
 if(isset($_POST['staddfath']))
 {
  //$username = $_POST['user_name'];// user name
  //$userjob = $_POST['user_job'];// user email
    $dnifa=trim($_POST['txtdnif']);
    $nomfa=trim($_POST['txtnamfa']);
    $profefa=trim($_POST['txtprofa']);
    $correo=trim($_POST['txtcorfa']);
    $telefa=trim($_POST['txttefa']);
    $direc=trim($_POST['txtdirfa']);
    

    $imgFile = $_FILES['foto']['name'];
    $tmp_dir = $_FILES['foto']['tmp_name'];
    $imgSize = $_FILES['foto']['size'];

    
   
    
  if(empty($dnifa)){
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

   
  $stmt = "SELECT * FROM fathers WHERE dnifa ='$dnifa'";
   if(empty($dnifa)) {
             echo '<script type="text/javascript">
swal("Error!", "Ya existe el registro a agregar!", "error").then(function() {
            window.location = "../padres/nuevo.php";
        });
        </script>';


         }

         else
         {  // Validaremos primero que el document no exista
            $sql="SELECT * FROM fathers WHERE dnifa ='$dnifa'";
            

            $stmt = $connect->prepare($sql);
            $stmt->execute();

            if ($stmt->fetchColumn() == 0) // Si $row_cnt es mayor de 0 es porque existe el registro
            {
                if(!isset($errMSG))
  {
$stmt = $connect->prepare("INSERT INTO fathers(dnifa,nomfa,profefa,correo,telefa,direc,foto,state) VALUES(:dnifa,:nomfa,:profefa,:correo,:telefa,:direc,:foto,'1')");
$stmt->bindParam(':dnifa',$dnifa);
$stmt->bindParam(':nomfa',$nomfa);
$stmt->bindParam(':profefa',$profefa);
$stmt->bindParam(':correo',$correo);
$stmt->bindParam(':telefa',$telefa);
$stmt->bindParam(':direc',$direc);
$stmt->bindParam(':foto',$foto);



   if($stmt->execute())
   {
    echo '<script type="text/javascript">
swal("¡Registrado!", "Se agrego correctamente", "success").then(function() {
            window.location = "../padres/mostrar.php";
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
            window.location = "../padres/nuevo.php";
        });
        </script>';

 // if no error occured, continue ....

}
  

  }
 
 }
?>