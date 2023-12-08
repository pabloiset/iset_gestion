<?php 
 if(isset($_POST['staddstud_fa']))
 {
  //$username = $_POST['user_name'];// user name
  //$userjob = $_POST['user_job'];// user email
    $idfa=trim($_POST['txtidfat']);
    $idstu=trim($_POST['txtidst']);
    
    
  if(empty($idstu)){
   $errMSG = "Please enter number.";
  }

   
  $stmt = "SELECT * FROM fat_stud WHERE idstu ='$idstu'";
   if(empty($idstu)) {
             echo '<script type="text/javascript">
swal("Error!", "Ya existe el registro a agregar!", "error").then(function() {
            window.location = "../padres/mostrar.php";
        });
        </script>';


         }

         else
         {  // Validaremos primero que el document no exista
            $sql="SELECT * FROM fat_stud WHERE idstu ='$idstu'";
            

            $stmt = $connect->prepare($sql);
            $stmt->execute();

            if ($stmt->fetchColumn() == 0) // Si $row_cnt es mayor de 0 es porque existe el registro
            {
                if(!isset($errMSG))
  {
$stmt = $connect->prepare("INSERT INTO fat_stud(idfa,idstu,state) VALUES(:idfa,:idstu,'1')");
$stmt->bindParam(':idfa',$idfa);
$stmt->bindParam(':idstu',$idstu);


   if($stmt->execute())
   {
    echo '<script type="text/javascript">
swal({
  title: "Registrado!",
  text: "Se agrego correctamente!",
  icon: "success",
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
        swal({
  title: "Error!",
  text: "El alumno ya cuenta con un padre!",
  icon: "error",
});
        </script>';




 // if no error occured, continue ....

}
  

  }
 
 }
?>