<?php
  

  if(isset($_POST['stupdusrfath']))
{
    $idfa = $_POST['txtfaid'];
    $usuario = $_POST['txtuserfa'];
    $clave=MD5($_POST['txtcntrfa']);
    $rol = $_POST['txtrol'];

    try {

        $query = "UPDATE fathers SET usuario=:usuario, clave=:clave, rol=:rol WHERE idfa=:idfa LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':usuario' => $usuario,
            ':clave' => $clave,
            ':rol' => $rol,
            ':idfa' => $idfa
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Perfil creado correctamente", "success").then(function() {
            window.location = "../padres/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error", "error").then(function() {
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