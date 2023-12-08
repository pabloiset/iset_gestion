<?php
  

  if(isset($_POST['stupdtea']))
{
    $idtea = $_POST['txtidte'];
    $dnite = $_POST['txtdnit'];
    $nomte = $_POST['txtnamte'];
    $sexte = $_POST['txtse'];
    $correo = $_POST['txtcor'];
    $telet = $_POST['txttete'];
    $state = $_POST['txtstte'];
    
    try {

        $query = "UPDATE teachers SET dnite=:dnite, nomte=:nomte, sexte=:sexte,correo=:correo,telet=:telet,state=:state WHERE idtea=:idtea LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':dnite' => $dnite,
            ':nomte' => $nomte,
            ':sexte' => $sexte,
            ':correo' => $correo,
            ':telet' => $telet,
            ':state' => $state,
            ':idtea' => $idtea
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
            window.location = "../docentes/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
            window.location = "../docentes/mostrar.php";
        });
        </script>';
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


?>