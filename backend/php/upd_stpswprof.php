<?php
  

  if(isset($_POST['stupdpswpro']))
{
    $id = $_POST['userid'];
    $clave=MD5($_POST['txtnewpsd']);
  

    try {

        $query = "UPDATE usuarios SET clave=:clave WHERE id=:id LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':clave' => $clave,
            
            ':id' => $id
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Contraseña actualizada correctamente", "success").then(function() {
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