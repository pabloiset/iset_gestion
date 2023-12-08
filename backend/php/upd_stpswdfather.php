<?php
  

  if(isset($_POST['stupdpswfath']))
{
    $idfa = $_POST['txtfaid'];
    $clave=MD5($_POST['txtcntrfa']);

    try {

        $query = "UPDATE fathers SET  clave=:clave WHERE idfa=:idfa LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':clave' => $clave,
            ':idfa' => $idfa
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Contraseña actualizada correctamente", "success").then(function() {
            window.location = "../padres/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
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