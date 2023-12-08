<?php
  

  if(isset($_POST['stupdfath']))
{
    $idfa = $_POST['txtfaid'];
    $dnifa = $_POST['txtdnif'];
    $nomfa = $_POST['txtnamfa'];
    $profefa = $_POST['txtprofa'];
    $correo = $_POST['txtcorfa'];
    $telefa = $_POST['txttefa'];
    $direc = $_POST['txtdirfa'];
    $state = $_POST['txtesta'];
   

    try {

        $query = "UPDATE fathers SET dnifa=:dnifa, nomfa=:nomfa, profefa=:profefa,correo=:correo,telefa=:telefa,direc=:direc,state=:state WHERE idfa=:idfa LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':dnifa' => $dnifa,
            ':nomfa' => $nomfa,
            ':profefa' => $profefa,
            ':correo' => $correo,
            ':telefa' => $telefa,
            ':direc' => $direc,
            ':state' => $state,
            ':idfa' => $idfa
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
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