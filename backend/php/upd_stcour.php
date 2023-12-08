<?php
  

  if(isset($_POST['stupdcourse']))
{
    $idcur = $_POST['txtidcour'];
    $nomcur = $_POST['txtnamcour'];
    $idper = $_POST['txtnper'];
    $iddeg = $_POST['txtgrd'];
    $idsub = $_POST['txtsgrd'];
    $idtea = $_POST['txtdoc'];
    $estado = $_POST['txtstte'];
   
   

    try {

        $query = "UPDATE course SET nomcur=:nomcur, idper=:idper, iddeg=:iddeg,idsub=:idsub,idtea=:idtea,estado=:estado WHERE idcur=:idcur LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':nomcur' => $nomcur,
            ':idper' => $idper,
            ':iddeg' => $iddeg,
            ':idsub' => $idsub,
            ':idtea' => $idtea,
            ':estado' => $estado,
            ':idcur' => $idcur
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
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