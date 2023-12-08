<?php
     session_start();
    
    if(!isset($_SESSION['rol']) == 1){
    header('location: ../../index.php');
  }
?>
<?php if(isset($_SESSION['id'])) { ?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Colegio peruano - plataforma virtual</title>
         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!----css3---->
        <link rel="stylesheet" href="../../backend/css/custom.css">
        <link rel="shortcut icon" href="../../backend/img/favicon.png" />  
          
          <!--google fonts -->
     
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
     <!--google material icon-->
     <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">



  </head>
  <body>
  
<div class="wrapper">
     <div class="body-overlay"></div>
     <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../../backend/img/favicon.png" class="img-fluid"/><span>Colegio peruano</span></h3>
            </div>
            <ul class="list-unstyled components">
               <li  class="">
                    <a href="../administrador/escritorio.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
          
               <li class="">
                    <a href="../periodo/mostrar.php"><i class="material-icons">calendar_month</i><span>Periodo Escolar</span></a>
                </li>
                    
               <li  class="">
                    <a href="../usuarios/mostrar.php"><i class="material-icons">person</i><span>Usuarios</span></a>
               </li>

               <li  class="">
                    <a href="../padres/mostrar.php"><i class="material-icons">group</i><span>Padres</span></a>
               </li>
               <li  class="">
                    <a href="../docentes/mostrar.php"><i class="material-icons">badge</i><span>Docentes</span></a>
               </li>
               <li  class="">
                    <a href="../alumnos/mostrar.php"><i class="material-icons">face</i><span>Alumnos</span></a>
               </li>

               <li  class="">
                    <a href="../cursos/mostrar.php"><i class="material-icons">school</i><span>Cursos</span></a>
               </li>
               <li  class="">
                    <a href="../grado/mostrar.php"><i class="material-icons">square_foot</i><span>Grado</span></a>
               </li>
               <li  class="">
                    <a href="../subgrado/mostrar.php"><i class="material-icons">history_edu</i><span>Subgrado</span></a>
               </li>
               <li  class="">
                    <a href="../seccion/mostrar.php"><i class="material-icons">card_membership</i><span>Sección</span></a>
               </li>
               <li  class="">
                    <a href="../asistencia/mostrar.php"><i class="material-icons">event_available</i><span>Asistencias</span></a>
               </li>
               <li  class="">
                    <a href="../calificaciones/mostrar.php"><i class="material-icons">verified</i><span>Calificaciones</span></a>
               </li>
               <li  class="active">
                    <a href="../horarios/mostrar.php"><i class="material-icons">schedule</i><span>Horarios</span></a>
               </li>
               
               
            </ul>

           
        </nav>

        <div id="content">
             
             <!--top--navbar----design--------->
             
             <div class="top-navbar">
                <nav class="navbar  navbar-expand-lg">
                    <button type="button" id="sidebar-collapse" class="d-xl-block d-lg-block d-md-none d-none">
                       <span class="material-icons">arrow_back_ios</span>
                     </button>
                     
                     <a class="navbar-brand" href="#">Dashboard</a>
                     <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                       data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle">
                        <span class="material-icons">more_vert</span>
                     </button>
                     <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarcollapse">
                        
                         <ul class="nav navbar-nav ml-auto">
                            
                            <li class="nav-item dropdown active">
                           <a class="nav-link " href="#" data-toggle="dropdown">
                             <span class="material-icons">person</span>  
                             
                              </a>
                              <ul class="dropdown-menu">
                                 <li>
                                   <a href="../cuenta/mostrar.php">Mi cuenta</a>
                                 </li>
                                  <li>
                                   <a href="../cuenta/mostrar.php">Contraseña</a>
                                 </li>
                                  <li>
                                   <a href="../pages-logout.php">Salir</a>
                                 </li>
                                  
                              </ul>
                         </li>
                         
                         <li class="nav-item">
                           <a class="nav-link" href="../cuenta/configuracion.php"><span class="material-icons">settings</span></a>
                         </li>
                        
                         </ul>
                     
                     </div>
                     
                 </nav>
             </div>
             
             <div class="main-content">

                 <!---row-second----->
                 
                 <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../administrador/escritorio.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="../horarios/mostrar.php">Horarios</a></li>
    <li class="breadcrumb-item active" aria-current="page">Mostrar</li>
  </ol>
</nav>
    
    <?php
 require '../../backend/bd/ctconex.php'; 
 $id = $_GET['id'];
 $sentencia = $connect->prepare("SELECT subgrade.idsub,subgrade.state ,degree.iddeg, degree.nomgra, subgrade.nomsub, subgrade.fere, GROUP_CONCAT(period.idper, '..', period.numperi, '..' SEPARATOR '__') AS period  FROM subgrade INNER JOIN degree ON subgrade.iddeg = degree.iddeg INNER JOIN period ON period.idper = degree.idper  WHERE subgrade.idsub= '$id' GROUP BY subgrade.idsub;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>
        <?php foreach($data as $f):?>

<div class="card" style="min-height:485px">
    <div class="card-header card-header-text">
        <h4 class="card-title">Horarios de clases <span class="badge badge-dbe"><?php echo  $f->nomsub; ?></span> <span class="badge badge-dq3"><?php echo  $f->nomgra; ?></span></h4>    

<?php
 $id = $_GET['id'];
 $sentencia = $connect->prepare("SELECT events.id, subgrade.idsub, subgrade.nomsub, events.our, events.day1, events.day2, events.day3, events.day4, events.day5, events.state FROM events INNER JOIN subgrade ON events.idsub = subgrade.idsub   WHERE subgrade.idsub= '$id' GROUP BY subgrade.idsub;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>
        <?php foreach($data as $n):?>
        

        <?php    if($n->state =='1')  { ?> 


<a href="../horarios/pdf.php?id=<?php echo  $n->idsub; ?>" class="btn btn-danger text-white"
    ><i class='material-icons' data-toggle='tooltip' title='edit'>picture_as_pdf</i></a> 
    <br><br>
    <form enctype="multipart/form-data" method="POST"  autocomplete="off">
        <input type="hidden" name="txtidevent" value="<?php echo  $n->idsub; ?>">

        <button class="btn btn-danger text-white" name="delour">Eliminar horario</button>
    </form>

               <?php  }   else {?> 
   
     <?php  } ?> 



<?php endforeach; ?>
    <?php else:?>
        <?php endif; ?>

    </div> 
<form enctype="multipart/form-data"   method="POST" action="" autocomplete="off" onsubmit="return validacion()">   
<div class="card-content table-responsive">
    <table class="table table-hover">
        <thead class="text-primary">
         <tr>
            <th>MAÑANA</th>
            <th >Lunes</th>
            <th >Martes</th>
            <th >Miércoles</th>
            <th >Jueves</th>
            <th >Viernes</th>
        </tr>   
        </thead>

        <tbody>
        <tr>
            <td><input class="form-control" type="text" value="8:00-8:45" name="txtour[]">
             <input type="hidden" value="<?php echo  $f->idsub; ?>" name="txtidsb[]">   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour1[]">
<option>seleccione</option>
               <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 

            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour2[]">
                <option>seleccione</option>
               <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour3[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour4[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select  class="form-control" style="width: 185px;" name="txtcour5[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
        </tr>



        <tr>
            <td><input class="form-control" type="text" value="8:45-9:30" name="txtour[]">
             <input type="hidden" value="<?php echo  $f->idsub; ?>" name="txtidsb[]">   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour1[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?>  
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour2[]">
                <option>seleccione</option>
               <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour3[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour4[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour5[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
        </tr>

        <tr>
            <td><input class="form-control" type="text" value="9:30 -10:15" name="txtour[]">
             <input type="hidden" value="<?php echo  $f->idsub; ?>" name="txtidsb[]">   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour1[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?>  
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour2[]">
                <option>seleccione</option>
               <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour3[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour4[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour5[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
        </tr>



        <tr>
            <td><input class="form-control" type="text" value="10:15-11:00" name="txtour[]">
             <input type="hidden" value="<?php echo  $f->idsub; ?>" name="txtidsb[]">   
            </td>
            <td>
            <select  class="form-control" style="width: 185px;" name="txtcour1[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?>  
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour2[]">
                <option>seleccione</option>
               <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour3[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour4[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour5[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
        </tr>


        <tr>
            <td><input class="form-control" style="background-color: yellow;" type="text" value="11:00 -11:30" name="txtour[]"></td>
            <input type="hidden" value="<?php echo  $f->idsub; ?>" name="txtidsb[]">  
            <td><input class="form-control" value="recreo" style="background-color: yellow;" type="text" name="txtcour1[]"></td>
            <td><input class="form-control" value="recreo" style="background-color: yellow;" type="text"  name="txtcour2[]"></td>
            <td><input class="form-control" value="recreo" style="background-color: yellow;" type="text" name="txtcour3[]"></td>
            <td><input class="form-control" value="recreo" style="background-color: yellow;" type="text" name="txtcour4[]"></td>
            <td><input class="form-control" value="recreo"  style="background-color: yellow;" type="text" name="txtcour5[]"></td>
        </tr>
        
        <tr>
            <td><input class="form-control" type="text" value="11:30-12:15" name="txtour[]">
             <input type="hidden" value="<?php echo  $f->idsub; ?>" name="txtidsb[]">   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour1[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?>  
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour2[]">
                <option>seleccione</option>
               <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour3[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour4[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select  class="form-control" style="width: 185px;" name="txtcour5[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
        </tr>


        <tr>
            <td><input class="form-control" type="text" value="12:15-13:00" name="txtour[]">
             <input type="hidden" value="<?php echo  $f->idsub; ?>" name="txtidsb[]">   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour1[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?>  
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour2[]">
                <option>seleccione</option>
               <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour3[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour4[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour5[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
        </tr>




        <tr>
            <td><input style="width : 130px; heigth : 130px" class="form-control" type="text" value="13:00-13:45" name="txtour[]">
             <input type="hidden" value="<?php echo  $f->idsub; ?>" name="txtidsb[]">   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour1[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?>  
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour2[]">
                <option>seleccione</option>
               <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour3[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour4[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
            <td>
            <select class="form-control" style="width: 185px;" name="txtcour5[]">
                <option>seleccione</option>
                <?php
                $id = $_GET['id']; 
            $stmt = $connect->prepare("SELECT * FROM course WHERE idsub = '$id'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $nomcur; ?>"><?php echo $nomcur; ?></option>
                    <?php
                }
        ?>
            ?> 
            </select>   
            </td>
        </tr>


    </tbody>
    </table>

    <button name='staddhour'  class="btn btn-success text-white">Enviar</button> 


    <a class="btn btn-danger text-white" href="../horarios/mostrar.php">Cancelar</a>
</div>

</form>
</div>



<?php endforeach; ?>
  
    <?php else:?>
        
<div class="alert alert-warning" style="position: relative;
    margin-top: 14px;
    margin-bottom: 0px;">
            <strong>No hay datos!</strong>
        </div>
    <?php endif; ?>                


                     <div>
                 </div>
               
             </div>
             

                 </div>
                
          </div>
</div>

<!----------html code compleate----------->

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../backend/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../backend/js/jquery-3.3.1.min.js"></script>
   
   <script src="../../backend/js/popper.min.js"></script>
   <script src="../../backend/js/bootstrap.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <?php
    include_once '../../backend/php/add_sthour.php'
?>

<?php
    include_once '../../backend/php/delt_sthour.php'
?>


  <script type="text/javascript">
        
          $(document).ready(function(){
            $("#sidebar-collapse").on('click',function(){
              $('#sidebar').toggleClass('active');
               $('#content').toggleClass('active');
            });
            
             $(".more-button,.body-overlay").on('click',function(){
               $('#sidebar,.body-overlay').toggleClass('show-nav');
             });
            
          });
          
</script>



  
  </body>
  
  </html>
             
             
<?php }else{ 
    header('Location: ../../index.php');
 } ?>