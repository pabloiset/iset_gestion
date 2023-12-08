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
                <h3><img src="../../backend/img/favicon.png" class="img-fluid"/><span>Colegio peruano</span></h3>
            </div>
            <ul class="list-unstyled components">
               <li  class="active">
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
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                               <div class="icon icon-warning">
                                   <span class="material-icons">group</span>
                                </div>
                            </div>
                            <div class="card-content">
                              <?php
                              require '../../backend/bd/ctconex.php'; 
        $sql = "SELECT COUNT(*) total FROM fathers";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();
         ?>
                                <p class="category"><strong>Padres</strong></p>
                                 <h3 class="card-title"><?php echo  $total; ?></h3>
                            </div>
                            
                         </div>
                     </div>
                     
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                               <div class="icon icon-rose">
                                   <span class="material-icons">badge</span>
                                </div>
                            </div>
                            <div class="card-content">
                              <?php
        $sql = "SELECT COUNT(*) total FROM teachers";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();
         ?>
                                <p class="category"><strong>Docentes</strong></p>
                                 <h3 class="card-title"><?php echo  $total; ?></h3>
                            </div>
                            
                         </div>
                     </div>
                     
                     <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                        <span class="material-icons">face</span>

                                    </div>
                                </div>
                                <div class="card-content">
                                   <?php
        $sql = "SELECT COUNT(*) total FROM students";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();
         ?>
                                    <p class="category"><strong>Alumnos</strong></p>
                                    <h3 class="card-title"><?php echo  $total; ?></h3>
                                </div>
                               
                            </div>
                        </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                               <div class="icon icon-info">
                                   <span class="material-icons">person</span>
                                </div>
                            </div>
                            <div class="card-content">
                              <?php
        $sql = "SELECT COUNT(*) total FROM usuarios";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();
         ?>
                                <p class="category"><strong>Usuarios</strong></p>
                                 <h3 class="card-title"><?php echo  $total; ?></h3>
                            </div>
                           
                         </div>
                     </div>
                     
                     
                 </div>
                 
                 <!---row-second----->
                 
                 <div class="row">
                    <div class="col-lg-7 col-md-12">
                       <div class="card" style="min-height:485px">
                           <div class="card-header card-header-text">
                               <h4 class="card-title">Alumnos recientes</h4>
                            </div>
                            <div class="card-content table-responsive">
                               <?php 
 $sentencia = $connect->prepare("SELECT * FROM students GROUP BY idstu DESC;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?> 
  <table class="table table-hover" id="example">
      <thead class="text-primary">
          <tr><th>#</th>
           <th>Foto</th>
           <th>Alumnos</th>
           <th>Correo</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach($data as $g):?>
          <tr>
              <td><?php echo  $g->idstu; ?></td>
               <td><img src="../../backend/img/subidas/<?php echo $g->foto ?>" width='90'></td>
               <td><?php echo  $g->nomstu; ?> </td>
               <td><?php echo  $g->correo; ?></td>
           </tr>
           <?php endforeach; ?>
       </tbody>
   </table>

    <?php else:?>
        
<div class="alert alert-warning" style="position: relative;
    margin-top: 14px;
    margin-bottom: 0px;">
            <strong>No hay datos!</strong>
        </div>
    <?php endif; ?>

                            </div>
                       </div>
                     <div>
                 </div>
               
             </div>
             
<div class="col-lg-5 col-md-12">
     <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
               <h4 class="card-title">Docentes recientes</h4>
          </div>                     
          <div class="card-content">
               <?php 
 $sentencia = $connect->prepare("SELECT * FROM teachers GROUP BY idtea DESC;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>
     <table class="table table-hover" id="example1">
       <thead class="text-primary">
         <tr>
            <th>#</th>
            <th>Docentes</th>
            <th>Estado</th>
         </tr>   
       </thead>
       <tbody>
          <?php foreach($data as $h):?>
            <tr>
               <td><?php echo  $h->idtea; ?></td>
               <td><?php echo  $h->nomte; ?></td>
               <td>
              <?php    if($h->state ==1)  { ?> 

    <span class="badge badge-success">Docente</span>
               <?php  }   else {?> 
               
            <span class="badge badge-danger">error</span>
           
          
     <?php  } ?>      
               </td>    
               </tr>
            <?php endforeach; ?>
       </tbody>   
     </table>
     <?php else:?>
        
<div class="alert alert-warning" style="position: relative;
    margin-top: 14px;
    margin-bottom: 0px;">
            <strong>No hay datos!</strong>
        </div>
    <?php endif; ?>                
          </div>
     </div> 
</div>
                 </div>
                
          </div>
</div>

<!----------html code compleate----------->

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../backend/js/jquery-3.3.1.min.js"></script>
   <script src="../../backend/js/jquery-3.3.1.slim.min.js"></script>
   <script src="../../backend/js/popper.min.js"></script>
   <script src="../../backend/js/bootstrap.min.js"></script>
   
  
  
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

    <script type="text/javascript">
$(document).ready(function() {
    $('#example1').DataTable( {
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