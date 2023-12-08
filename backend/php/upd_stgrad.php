<?php
  

  if(isset($_POST['stupdgrde']))
{
    $iddeg = $_POST['txtidgrd'];
    $idper = $_POST['txtprd'];
    $nomgra = $_POST['txtnamgrd'];
    $state = $_POST['txtstte'];

    try {

        $query = "UPDATE degree SET idper=:idper, nomgra=:nomgra, state=:state WHERE iddeg=:iddeg LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':idper' => $idper,
            ':nomgra' => $nomgra,
            ':state' => $state,
            ':iddeg' => $iddeg
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
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