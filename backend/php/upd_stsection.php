<?php
  

  if(isset($_POST['stupdsection']))
{
    $idsec = $_POST['txtidse'];
    $nomsec = $_POST['txtnamsecc'];
   
    $capa = $_POST['txtcapc'];
    $state = $_POST['txtstte'];
    
    try {

        $query = "UPDATE seccion SET nomsec=:nomsec, capa=:capa, state=:state WHERE idsec=:idsec LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':nomsec' => $nomsec,
           
            ':capa' => $capa,
            ':state' => $state,
            ':idsec' => $idsec
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
            window.location = "../seccion/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
            window.location = "../seccion/mostrar.php";
        });
        </script>';
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


?>