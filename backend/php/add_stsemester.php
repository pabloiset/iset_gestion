    <?php 

if(isset($_POST['staddsemste']))
{

    $namsems=trim($_POST['txtstte']);
    $idper=trim($_POST['txtidpe']);
    $idsec=trim($_POST['txtidse']);
   

       $d3 = $connect->prepare("INSERT INTO semester (namsems,idper, idsec) VALUES('$namsems','$idper','$idsec')");

             $inserted = $d3->execute();

             if($inserted>0){

    echo '<script type="text/javascript">
swal("Registrado!", "Se agrego correctamente el semestre!", "success");
        </script>';
}else{
    

 echo '<script type="text/javascript">
swal("Error!", "No se pueden agregar datos,  comuníquese con el administrador!", "error");
        </script>';

print_r($sql->errorInfo()); 
}
    


    }

?>