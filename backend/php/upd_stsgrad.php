<?php
  

  if(isset($_POST['stupdsgrde']))
{
    $idsub = $_POST['txtidsgrd'];
    $nomsub = $_POST['txtnamsgrd'];
    $iddeg= $_POST['txtgrd'];
    $state = $_POST['txtstte'];

    try {

        $query = "UPDATE subgrade SET nomsub=:nomsub, iddeg=:iddeg, state=:state WHERE idsub=:idsub LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':nomsub' => $nomsub,
            ':iddeg' => $iddeg,
            ':state' => $state,
            ':idsub' => $idsub
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
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