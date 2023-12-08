<?php
  

  if(isset($_POST['stdelperiod']))
{
    $idper = $_POST['txtperid'];
    
    try {

        $query = "UPDATE period SET state='Inactivo' WHERE idper=:idper LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':idper' => $idper
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("Desactivado!", "Desactivado correctamente", "success").then(function() {
            window.location = "../periodo/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
            window.location = "../periodo/mostrar.php";
        });
        </script>';
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


?>