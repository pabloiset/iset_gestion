<?php
  

  if(isset($_POST['stuusertea']))
{
    $idtea = $_POST['txtidte'];
    $usuario = $_POST['txtuserte'];
    $clave=MD5($_POST['txtcntrte']);
    $rol = $_POST['txtrol'];

    try {

        $query = "UPDATE teachers SET usuario=:usuario, clave=:clave, rol=:rol WHERE idtea=:idtea LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':usuario' => $usuario,
            ':clave' => $clave,
            ':rol' => $rol,
            ':idtea' => $idtea
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Perfil creado correctamente", "success").then(function() {
            window.location = "../docentes/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error", "error").then(function() {
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