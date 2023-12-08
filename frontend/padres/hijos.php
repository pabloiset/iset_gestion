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
    <li class="breadcrumb-item"><a href="../padres/mostrar.php">Padres</a></li>
    <li class="breadcrumb-item active" aria-current="page">Hijos</li>
  </ol>
</nav>
                       
 <div class="card" style="min-height:485px">
   <div class="card-header card-header-text">
     <h4 class="card-title">Añadir los hijos de los padres</h4>  
   </div>
   <div class="card-content table-responsive">
    <?php
 require '../../backend/bd/ctconex.php'; 
 $id = $_GET['id'];
 $sentencia = $connect->prepare("SELECT * FROM fathers  WHERE fathers.idfa= '$id';");
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

<div class="row">
  <div class="col-md-6 col-lg-6">
   <div class="form-group">
    <label for="email">DNI del padre<span class="text-danger">*</span></label>
    <input type="text" readonly maxlength="8"  value="<?php echo  $f->dnifa; ?>" class="form-control"  placeholder="ejm: 76765654">
</div>   
  </div>
  <div class="col-md-6 col-lg-6">
   <div class="form-group">
    <label for="email">Nombre del padre<span class="text-danger">*</span></label>
    <input type="text"  class="form-control" value="<?php echo  $f->nomfa; ?>"   readonly placeholder="ejm: laura">
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
          <tr>
            <th>Foto</th>
           <th>DNI</th>
           <th>Nombre</th>
           <th>Correo</th>
           <th>Rol</th>
           <th>Acciones</th>
           </tr>
       </thead>
       <tbody>
        <?php foreach($data as $a):?>
           <tr>
               <td><img height="50" src="../../backend/img/subidas/<?php echo $a->foto ?>" width='50'></td>
               <td><?php echo  $a->dnist; ?></td>
               <td><?php echo  $a->nomstu; ?></td>
               <td><a href="mail:<?php echo $a->correo ?>"><?php echo $a->correo ?></a></td>
               <td>
                   <?php    if($a->rol =='4')  { ?> 

    <span class="badge badge-success">Alumnos</span>
               <?php  }   else {?> 
    <span class="badge badge-danger">error</span>
     <?php  } ?>
               </td>
               <td>
                <form enctype="multipart/form-data" method="POST"  autocomplete="off">
                  <input type="hidden" name="txtidfat" value="<?php echo  $f->idfa; ?>">
                  <input type="hidden" name="txtidst" value="<?php echo  $a->idstu; ?>">
                  

                  <button name='staddstud_fa' class="btn btn-danger text-white"><i class='material-icons' data-toggle='tooltip' title='edit'>add</i></button>


                </form>
      
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

 <div class="card" style="min-height:485px">
     <div class="card-header card-header-text">
      <h4 class="card-title">Listado de tus hijos</h4>    
     </div>
     <div class="card-content table-responsive">
         <?php
                               
 $id = $_GET['id'];
 $sentencia = $connect->prepare("SELECT fat_stud.idfatstu, fathers.idfa, fathers.dnifa, students.idstu, students.dnist, students.nomstu, students.correo, students.foto, students.state, students.rol FROM fat_stud INNER JOIN fathers ON fat_stud.idfa = fathers.idfa INNER JOIN students ON fat_stud.idstu =students.idstu WHERE fathers.idfa= '$id';");
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
            <th>Foto</th>
           <th>DNI</th>
           <th>Nombre</th>
           <th>Correo</th>
           <th>Rol</th>
           <th>Estado</th>
           </tr>
       </thead>
       <tbody>
         <?php foreach($data as $r):?>
           <tr>
               <td><img height="50" src="../../backend/img/subidas/<?php echo $r->foto ?>" width='50'></td>
               <td><?php echo $r->dnist ?></td>
               <td><?php echo $r->nomstu ?></td>
               <td><?php echo $r->correo ?></td>
               <td>
                <?php    if($r->rol =='4')  { ?> 

    <span class="badge badge-success">Alumnos</span>
               <?php  }   else {?> 
    <span class="badge badge-danger">error</span>
     <?php  } ?>   
               </td>
               <td><?php    if($r->state =='1')  { ?> 

    <span class="badge badge-success">Activo</span>
               <?php  }   else {?> 
    <span class="badge badge-danger">Inactivo</span>
     <?php  } ?></td>
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
             

                 </div>
                
          </div>
</div>

<!----------html code compleate----------->

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="../../backend/js/jquery-3.3.1.slim.min.js"></script>
   <script src="../../backend/js/jquery-3.3.1.min.js"></script>
   <script src="../../backend/js/popper.min.js"></script>
   <script src="../../backend/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <?php
    include_once '../../backend/php/add_stfast.php'
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
    <script src="../../backend/js/reenvio.js"></script>
  </body>
  
  </html>
             
             
<?php }else{ 
    header('Location: ../index.php');
 } ?>