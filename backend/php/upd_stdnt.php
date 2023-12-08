<?php
  

  if(isset($_POST['stupdstud']))
{
    $idstu = $_POST['txtstid'];
    $dnist = $_POST['txtdnit'];
    $nomstu = $_POST['txtnamst'];
    $edast = $_POST['txtedst'];
    $direce = $_POST['txtdirst'];
    $correo = $_POST['txtcorst'];
    $sexes = $_POST['txtsest'];
    $fenac = $_POST['txtnacst'];
    $state = $_POST['txtest'];
    

   

    try {

        $query = "UPDATE students SET dnist=:dnist, nomstu=:nomstu, edast=:edast,direce=:direce,correo=:correo,sexes=:sexes,    fenac=:fenac, state=:state WHERE idstu=:idstu LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':dnist' => $dnist,
            ':nomstu' => $nomstu,
            ':edast' => $edast,
            ':direce' => $direce,
            ':correo' => $correo,
            ':sexes' => $sexes,
            ':fenac' => $fenac,
            ':state' => $state,
            ':idstu' => $idstu
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
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