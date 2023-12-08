<?php
     session_start();
    
    if(!isset($_SESSION['rol']) == 1){
    header('location: ../index.php');
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
       <title>ISET- plataforma virtual</title>
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
  <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="../../backend/css/datatable.css">
    <link rel="stylesheet" type="text/css" href="../../backend/css/buttonsdataTables.css">
    <link rel="stylesheet" type="text/css" href="../../backend/css/font.css">

  </head>
  <body>
  
<div class="wrapper">
     <div class="body-overlay"></div>
     <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../../backend/img/favicon.png" class="img-fluid"/><span>Iset_mdp</span></h3>
            </div>
            <ul class="list-unstyled components">
               <li  class="active">
                    <a href="../administrador/escritorio.php" class="dashboard"><i class="material-icons">dashboard</i><span>Escritorio</span></a>
                </li>
          
               <li class="">
                    <a href="../periodo/mostrar.php"><i class="material-icons">calendar_month</i><span>Ciclo Escolar</span></a>
                </li>
                    
               <li  class="">
                    <a href="../usuarios/mostrar.php"><i class="material-icons">person</i><span>Usuarios</span></a>
               </li>

               <li  class="">
                    <a href="../padres/mostrar.php"><i class="material-icons">group</i><span>Familia</span></a>
               </li>
               <li  class="">
                    <a href="../docentes/mostrar.php"><i class="material-icons">badge</i><span>Docentes</span></a>
               </li>
               <li  class="">
                    <a href="../alumnos/mostrar.php"><i class="material-icons">face</i><span>Alumnos</span></a>
               </li>

               <li  class="">
                    <a href="../cursos/mostrar.php"><i class="material-icons">school</i><span>Área</span></a>
               </li>
               <li  class="">
                    <a href="../grado/mostrar.php"><i class="material-icons">square_foot</i><span>Carrera</span></a>
               </li>
               <li  class="">
                    <a href="../subgrado/mostrar.php"><i class="material-icons">history_edu</i><span>Año</span></a>
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
               <li  class="">
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
                     
                     <a class="navbar-brand" href="#">Escritorio</a>
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
                         <!-- <a class="nav-link" href="../cuenta/configuracion.php"><span class="material-icons">settings</span></a> --> </li>
                        
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
  <li class="breadcrumb-item"><a href="../administrador/escritorio.php">Escritorio</a></li>
    <li class="breadcrumb-item"><a href="../seccion/mostrar.php">Sección</a></li>
    <li class="breadcrumb-item active" aria-current="page">Entrar a la seccion</li>
  </ol>
</nav>
       
     <div class="card" style="min-height:485px">
       <?php
 require '../../backend/bd/ctconex.php'; 
 $id = $_GET['id'];
 $sentencia = $connect->prepare("SELECT seccion.idsec, seccion.nomsec, subgrade.idsub, subgrade.nomsub, course.idcur, course.nomcur, seccion.capa, seccion.state, GROUP_CONCAT(degree.iddeg, '..', degree.nomgra, '..' SEPARATOR '__') AS degree, GROUP_CONCAT(period.idper, '..', period.numperi, '..' SEPARATOR '__') AS period, GROUP_CONCAT(teachers.idtea, '..', teachers.correo, '..',teachers.nomte, '..', teachers.dnite, '..', teachers.telet, '..', 
   teachers.usuario, '..', teachers.sexte, '..', teachers.foto, '..' SEPARATOR '__') AS teachers FROM seccion INNER JOIN subgrade ON seccion.idsub =subgrade.idsub  INNER JOIN course ON seccion.idcur = course.idcur INNER JOIN degree ON subgrade.iddeg =degree.iddeg INNER JOIN period ON course.idper = period.idper  INNER JOIN teachers ON course.idtea = teachers.idtea  WHERE seccion.idsec= '$id'  GROUP BY seccion.idsec;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>
        <?php foreach($data as $obj):?>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <?php foreach(explode("__", $obj->teachers) as $teaConcatenados){ 
                                $teachers = explode("..", $teaConcatenados)
                                ?>
                    <img src="../../backend/img/subidas/<?php echo $teachers[7] ?>" alt="Admin" class="rounded-circle" width="150">      
                <?php } ?>

                    <div class="mt-3">
                      <?php foreach(explode("__", $obj->teachers) as $teaConcatenados){ 
                                $teachers = explode("..", $teaConcatenados)
                                ?>
                            
                               <h4><?php echo $teachers[2] ?></h4>
                               
                <?php } ?>
                      <p class="text-secondary mb-1"><strong>Docente</strong></p>
                      <p class="text-secondary mb-1">Curso:&nbsp;<span class="badge bg-danger text-white"><?php echo $obj->nomcur;?></span></p>
                      <?php foreach(explode("__", $obj->teachers) as $teaConcatenados){ 
                                $teachers = explode("..", $teaConcatenados)
                                ?>
                        <p class="text-muted font-size-sm"><?php echo $teachers[1] ?></p>      
                <?php } ?>

                     
                      <?php foreach(explode("__", $obj->degree) as $periodoConcatenados){ 
                                $degree = explode("..", $periodoConcatenados)
                                ?>
                               <p class="text-muted font-size-sm">Grado:&nbsp;<span class="badge bg-dark text-white"><?php echo $degree[1] ?></span></p>
                               
                <?php } ?>
                    <p class="text-muted font-size-sm">Sugrado:&nbsp;<span class="badge bg-success text-white"><?php echo $obj->nomsub;?></span></p>
                    <p class="text-muted font-size-sm">Seccion:&nbsp;<span class="badge bg-warning text-white"><?php echo $obj->nomsec;?></span></p>


                     <br>
                     
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">DNI</h6>
                    </div>
                    
                    <?php foreach(explode("__", $obj->teachers) as $teaConcatenados){ 
                                $teachers = explode("..", $teaConcatenados)
                                ?>
                               <div class="col-sm-9 text-secondary">
                     <?php echo $teachers[3] ?>
                    </div>
                               
                <?php } ?>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombre</h6>
                    </div>
                    <?php foreach(explode("__", $obj->teachers) as $teaConcatenados){ 
                                $teachers = explode("..", $teaConcatenados)
                                ?>
                   <div class="col-sm-9 text-secondary">
                     <?php echo $teachers[2] ?>
                    </div>         
                
                               
                <?php } ?>

                    
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Correo</h6>
                    </div>
                    <?php foreach(explode("__", $obj->teachers) as $teaConcatenados){ 
                                $teachers = explode("..", $teaConcatenados)
                                ?>
                      
                        <div class="col-sm-9 text-secondary">
                     <?php echo $teachers[1] ?>
                    </div>      
                <?php } ?>

                    
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Teléfono</h6>
                    </div>
                    <?php foreach(explode("__", $obj->teachers) as $teaConcatenados){ 
                                $teachers = explode("..", $teaConcatenados)
                                ?>
                      
                        <div class="col-sm-9 text-secondary">
                     <?php echo $teachers[4] ?>
                    </div>      
                <?php } ?>

                   
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Usuario</h6>
                    </div>
                    <?php foreach(explode("__", $obj->teachers) as $teaConcatenados){ 
                                $teachers = explode("..", $teaConcatenados)
                                ?>
                      
                        <div class="col-sm-9 text-secondary">
                     <?php echo $teachers[5] ?>
                    </div>      
                <?php } ?>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Género</h6>
                    </div>
                    <?php foreach(explode("__", $obj->teachers) as $teaConcatenados){ 
                                $teachers = explode("..", $teaConcatenados)
                                ?>
                      
                        <div class="col-sm-9 text-secondary">
                     <?php echo $teachers[6] ?>
                    </div>      
                <?php } ?>
                  </div>
                 <br>
                    
                    <div class="row">
                        <div class="col-sm-9">



                       <?php 
                       $limit = $obj->capa;
                       $id = $_GET['id'];

                       $sql = "SELECT alum_secc.idaluse, seccion.idsec, seccion.nomsec, seccion.capa, students.idstu, students.dnist, students.nomstu, students.edast, students.direce, students.correo, students.sexes, students.fenac, students.foto, COUNT(*) total FROM alum_secc INNER JOIN  seccion ON alum_secc.idsec = seccion.idsec INNER JOIN students ON alum_secc.idstu =students.idstu      WHERE seccion.idsec= '$id' GROUP BY seccion.idsec";

        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();


                        ?>


                      
                       <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
          <i class="material-icons">&#xE147;</i> </a> 
          <input type="hidden" value="<?php echo "$limit"; ?>" name="">
          <input type="hidden" value="<?php echo  $total; ?>" name="">

                    </div>
                    </div>

                  
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
  
    <?php else:?>
        
<div class="alert alert-warning" style="position: relative;
    margin-top: 14px;
    margin-bottom: 0px;">
            <strong>No hay datos!</strong>
        </div>
    <?php endif; ?> 
     </div>


     <div class="card" style="min-height:485px">

        <div class="card-header card-header-text">
            <h4 class="card-title">Mis alumnos de esta seccion</h4>
                            
        </div>
        <?php 
 $id = $_GET['id'];
 $sentencia = $connect->prepare("SELECT alum_secc.idaluse, seccion.idsec, seccion.nomsec, seccion.capa, students.idstu, students.dnist, students.nomstu, students.edast, students.direce, students.correo, students.sexes, students.fenac, students.foto FROM alum_secc INNER JOIN  seccion ON alum_secc.idsec = seccion.idsec INNER JOIN students ON alum_secc.idstu =students.idstu WHERE alum_secc.idsec= '$id';");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>
        <?php foreach($data as $d):?>
<div class="row justify-content-center mb-3">
      <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img src="../../backend/img/subidas/<?php echo $d->foto;?>"
                    class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h5><?php echo $d->nomstu;?></h5>
                <div class="d-flex flex-row">
                  <div class="text-danger mb-1 me-2">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                  </div>
               
                </div>
                <div class="mt-1 mb-0 text-muted small">
                  <span>Estudiante</span>
                 
                </div>
                
                <p class="text-truncate mb-4 mb-md-0">
                  <?php echo $d->nomsec;?>
                </p>

                <p class="text-truncate mb-4 mb-md-0">
                  <?php echo $d->dnist;?>
                </p>

                <p class="text-truncate mb-4 mb-md-0">
                  <?php echo $d->correo;?>
                </p>
              </div>

              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-column mt-4">


<form enctype="multipart/form-data" method="POST"  autocomplete="off">
 <input type="hidden" class="item" name="txtidalm" value="<?php echo $d->idaluse;?>">
 <button class="btn btn-danger btn-sm eliminar" name='delalum'>ELIMINAR</button>  
</form>


                </div>
              </div>
              

            </div>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; ?>
    <?php else:?>
      
      <div class="alert alert-warning" style="position: relative;
    
    margin-top: 14px;
    margin-bottom: 0px;">
            <strong>No hay alumnos para esta sección!</strong>
        </div>
    <?php endif; ?> 


     </div>
                      
                       

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
    include_once '../../backend/php/add_stalu_sc.php'
?>

<?php
    include_once '../../backend/php/delt_stalu_sc.php'
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

<script src="../../backend/js/reenvio.js"></script>
<?php
    include_once '../../backend/modal/maea.php'

?>
<!-- Data Tables -->
    <script type="text/javascript" src="../../backend/js/datatable.js"></script>
    <script type="text/javascript" src="../../backend/js/datatablebuttons.js"></script>
    <script type="text/javascript" src="../../backend/js/jszip.js"></script>
    <script type="text/javascript" src="../../backend/js/pdfmake.js"></script>
    <script type="text/javascript" src="../../backend/js/vfs_fonts.js"></script>
    <script type="text/javascript" src="../../backend/js/buttonshtml5.js"></script>
    <script type="text/javascript" src="../../backend/js/buttonsprint.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script>


    



  </body>
  
  </html>
             
             
<?php }else{ 
    header('Location: ../index.php');
 } ?>