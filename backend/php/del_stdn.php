<?php
  

  if(isset($_POST['stdelstn']))
{
    $idstu = $_POST['txtstid'];
    
    try {

        $query = "UPDATE students SET state='0' WHERE idstu=:idstu LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':idstu' => $idstu
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("Desactivado!", "Desactivado correctamente", "success").then(function() {
            window.location = "../alumnos/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
            window.location = "../alumnos/mostrar.php";
        });
        </script>';
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


?>