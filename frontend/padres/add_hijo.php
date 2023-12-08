<?php  
    if (!isset($_GET['id'])) {
        exit();
    }

    $id = $_GET['id'];
    $idfa=$_POST['txtcorrc'];
    $idstu=$_POST['txtcorrc'];
    
    include '../../backend/bd/ctconex.php';

    $sentencia = $connect->prepare("DELETE FROM clientes WHERE iddn = ?;");
     $sentencia = $connect->prepare("INSERT INTO cust_serv (idcli,idserv,inicio,fin,state) VALUES('$idcli','$idserv','$inicio','$fin','1')");

    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        

            header('Location: mostrar.php');

    }else{
        

         echo '<script type="text/javascript">
swal("Error!", "No se pueden eliminar datos,  comuníquese con el administrador ", "error").then(function() {
            window.location = "mostrar.php";
        });
        </script>';



    }

?>


