<?php  
 if (isset($_POST['staddhour'])) {
    $txtidsb=$_POST['txtidsb'];
    $our=$_POST['txtour'];
    $day1=$_POST['txtcour1'];
    $day2=$_POST['txtcour2'];
    $day3=$_POST['txtcour3'];
    $day4=$_POST['txtcour4'];
    $day5=$_POST['txtcour5'];

    $tamanio = count($txtidsb);

    for ($i=0; $i < $tamanio ; $i++) { 
        // antes de hacer el insert, probamos
        // echo $alumno[$i] . ' | ' . $prpar[$i] . ' | ' . $separ[$i] . ' | ' . $tepar[$i] . ' | ' .$sug[$i] . '<br>';

         $statement = $connect->prepare("INSERT INTO events (idsub,our,day1,day2,day3,day4,day5,state) VALUES
         ('$txtidsb[$i]', '$our[$i]', '$day1[$i]', '$day2[$i]', '$day3[$i]', '$day4[$i]', '$day5[$i]', 1)");

           //echo "$item";
                //Execute the statement and insert our values.
        $inserted = $statement->execute(); 
  

    }

    if ($inserted>0) {
       
       echo '<script type="text/javascript">
swal("¡Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "../horarios/mostrar.php";
        });
        </script>';


    }
    else{
    

 echo '<script type="text/javascript">
swal("Error!", "No se pueden agregar datos,  comuníquese con el administrador ", "error").then(function() {
            window.location = ../horarios/"mostrar.php";
        });
        </script>';

print_r($sql->errorInfo()); 
}
 }
?>