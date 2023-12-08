<?php
  

  if(isset($_POST['stdltgrde']))
{
    $iddeg = $_POST['txtidgrd'];
    
    try {

        $query = "UPDATE degree SET state='0' WHERE iddeg=:iddeg LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':iddeg' => $iddeg
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("Desactivado!", "Desactivado correctamente", "success").then(function() {
            window.location = "../grado/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
            window.location = "../grado/mostrar.php";
        });
        </script>';
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


?>