<?php
  

  if(isset($_POST['stdelsect']))
{
    $idsec = $_POST['txtidse'];
    
    try {

        $query = "UPDATE seccion SET state='0' WHERE idsec=:idsec LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':idsec' => $idsec
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("Desactivado!", "Desactivado correctamente", "success").then(function() {
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