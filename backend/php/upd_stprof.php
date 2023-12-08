<?php
  

  if(isset($_POST['stupdprofl']))
{
    $id = $_POST['useid'];
    $usuario = $_POST['txtuser'];
    $nombre = $_POST['txtnam'];
    $correo = $_POST['txtemai'];
   

    try {

        $query = "UPDATE usuarios SET usuario=:usuario, nombre=:nombre, correo=:correo WHERE id=:id LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':usuario' => $usuario,
            ':nombre' => $nombre,
            ':correo' => $correo,
            ':id' => $id
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
            window.location = "../cuenta/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
            window.location = "../cuenta/mostrar.php";
        });
        </script>';
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


?>