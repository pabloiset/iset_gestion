<?php
  

  if(isset($_POST['stdelfath']))
{
    $idfa = $_POST['txtfaid'];
    
    try {

        $query = "UPDATE fathers SET state='0' WHERE idfa=:idfa LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':idfa' => $idfa
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("Desactivado!", "Desactivado correctamente", "success").then(function() {
            window.location = "../padres/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
            window.location = "../padres/mostrar.php";
        });
        </script>';
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


?>