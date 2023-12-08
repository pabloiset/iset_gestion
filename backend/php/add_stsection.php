<?php 
require_once('../../backend/bd/ctconex.php'); 

if(isset($_POST['staddsection']))
{
    
    $nomsec = $_POST['txtnamsecc'];
    $idsub = $_POST['txtsgrd'];
    $curso =  $_POST['curso'];
    $capa = $_POST['txtcapc'];
    foreach($curso as $item)
    {
        // echo $item . "<br>";
        
        $statement = $connect->prepare("INSERT INTO seccion (nomsec,idsub,idcur,capa,state) VALUES ('$nomsec','$idsub',
            '$item','$capa',1)");
        //Execute the statement and insert our values.
$inserted = $statement->execute();
    }

    if($inserted){
    echo '<script type="text/javascript">
swal("¡Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "../seccion/mostrar";
        });
        </script>';
}
}

?>