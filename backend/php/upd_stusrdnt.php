<?php
  

  if(isset($_POST['stupdusrstud']))
{
    $idstu = $_POST['txtstid'];
    $usuario = $_POST['txtuserstd'];
    $clave=MD5($_POST['txtcntrstd']);
    $rol = $_POST['txtrol'];

    try {

        $query = "UPDATE students SET usuario=:usuario, clave=:clave, rol=:rol WHERE idstu=:idstu LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':usuario' => $usuario,
            ':clave' => $clave,
            ':rol' => $rol,
            ':idstu' => $idstu
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Perfil creado correctamente", "success").then(function() {
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