<?php
  

  if(isset($_POST['stdltsgrde']))
{
    $idsub = $_POST['txtidsgrd'];
    
    try {

        $query = "UPDATE subgrade SET state='0' WHERE idsub=:idsub LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':idsub' => $idsub
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("Desactivado!", "Desactivado correctamente", "success").then(function() {
            window.location = "../subgrado/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
            window.location = "../subgrado/mostrar.php";
        });
        </script>';
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


?>