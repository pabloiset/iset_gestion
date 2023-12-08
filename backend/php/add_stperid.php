<?php  
require_once('../../backend/bd/ctconex.php');
 if(isset($_POST['staddperiod']))
 {
  //$username = $_POST['user_name'];// user name
  //$userjob = $_POST['user_job'];// user email


    $numperi=$_POST['txtper'];
    $starperi=$_POST['txtperco'];
    $endperi=$_POST['txtperter'];
    $nomperi=$_POST['txtnamp'];
    $state=$_POST['txtesta'];
  
   
  if(empty($numperi)){
   $errMSG = "Please enter your inicio.";
  }

  
  

  $stmt = "SELECT * FROM period  WHERE numperi='$numperi'";


   if(empty($numperi)) {
             echo '<script type="text/javascript">
swal("Error!", "Ya existe el registro a agregar!", "error").then(function() {
            window.location = "../customers/mostrar.php";
        });
        </script>';
         }

         else
         {  // Validaremos primero que el document no exista
            $sql="SELECT * FROM period  WHERE numperi='$numperi'";
            

            $stmt = $connect->prepare($sql);
            $stmt->execute();

            if ($stmt->fetchColumn() == 0) // Si $row_cnt es mayor de 0 es porque existe el registro
            {
                if(!isset($errMSG))
  {
   $stmt = $connect->prepare("INSERT INTO period(numperi, starperi, endperi,nomperi,state) VALUES(:numperi, :starperi,:endperi,:nomperi,:state)");
   $stmt->bindParam(':numperi',$numperi);
   $stmt->bindParam(':starperi',$starperi);
   $stmt->bindParam(':endperi',$endperi);
   $stmt->bindParam(':nomperi',$nomperi);
   $stmt->bindParam(':state',$state);


   if($stmt->execute())
   {
    echo '<script type="text/javascript">
swal("¡Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "../periodo/mostrar.php";
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
swal("Error!", "ya existe el registro!", "error").then(function() {
            window.location = "../periodo/mostrar.php";
        });
        </script>';

 // if no error occured, continue ....

}
  

  }
 
 }
?>