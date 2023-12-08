    <?php 

if(isset($_POST['staddstalu_sc']))
{

    $idsec=trim($_POST['txtidsec']);
    $idstu=trim($_POST['txtidalum']);
   

       $d3 = $connect->prepare("INSERT INTO alum_secc (idsec,idstu) VALUES('$idsec','$idstu')");

             $inserted = $d3->execute();

             if($inserted>0){

    echo '<script type="text/javascript">
swal("Registrado!", "Se agrego correctamente!", "success");
        </script>';
}else{
    

 echo '<script type="text/javascript">
swal("Error!", "No se pueden agregar datos,  comuníquese con el administrador!", "error");
        </script>';

print_r($sql->errorInfo()); 
}
    


    }

?>