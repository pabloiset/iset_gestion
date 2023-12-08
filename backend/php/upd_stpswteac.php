<?php
  

  if(isset($_POST['stupdpswtea']))
{
    $idtea = $_POST['txtidte'];
    $clave=MD5($_POST['txtcntrstd']);

    try {

        $query = "UPDATE teachers SET  clave=:clave WHERE idtea=:idtea LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':clave' => $clave,
            ':idtea' => $idtea
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Contraseña actualizada correctamente", "success").then(function() {
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