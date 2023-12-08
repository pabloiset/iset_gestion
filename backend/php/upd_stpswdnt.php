<?php
  

  if(isset($_POST['stupdpswstud']))
{
    $idstu = $_POST['txtstid'];
    $clave=MD5($_POST['txtcntrstd']);

    try {

        $query = "UPDATE students SET  clave=:clave WHERE idstu=:idstu LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':clave' => $clave,
            ':idstu' => $idstu
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Contraseña actualizada correctamente", "success").then(function() {
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