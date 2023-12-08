<?php
  

  if(isset($_POST['stupdperiod']))
{
    $idper = $_POST['txtperid'];
    $numperi = $_POST['txtper'];
    $starperi = $_POST['txtperco'];
    $endperi = $_POST['txtperter'];
    $nomperi = $_POST['txtnamp'];
    $state = $_POST['txtesta'];
   

    try {

        $query = "UPDATE period SET numperi=:numperi, starperi=:starperi, endperi=:endperi,nomperi=:nomperi,state=:state WHERE idper=:idper LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':numperi' => $numperi,
            ':starperi' => $starperi,
            ':endperi' => $endperi,
            ':nomperi' => $nomperi,
            ':state' => $state,
            ':idper' => $idper
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {

         echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
            window.location = "../periodo/mostrar.php";
        });
        </script>';

            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
            window.location = "../periodo/mostrar.php";
        });
        </script>';
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


?>