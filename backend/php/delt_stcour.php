<?php
  

  if(isset($_POST['stdltcour']))
{
    $idcur = $_POST['txtidcour'];
    
    try {

        $query = "UPDATE course SET estado='0' WHERE idcur=:idcur LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':idcur' => $idcur
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("Desactivado!", "Desactivado correctamente", "success").then(function() {
            window.location = "../cursos/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
            window.location = "../cursos/mostrar.php";
        });
        </script>';
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


?>