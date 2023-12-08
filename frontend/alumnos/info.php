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
       <title>ISET_MdP - plataforma virtual</title>
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
                         <!-- <a class="nav-link" href="../cuenta/configuracion.php"><span class="material-icons">settings</span></a> -->   </li>
                        
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
    <li class="breadcrumb-item"><a href="../alumnos/mostrar.php">Alumnos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Informacion</li>
  </ol>
</nav>
                       <div class="card" style="min-height:485px">
                           <div class="card-header card-header-text">
                               <h4 class="card-title">Informacion alumnos</h4>
                               
                            </div>
                           
<div class="card-content table-responsive">

<?php
 require '../../backend/bd/ctconex.php'; 
 $id = $_GET['id'];
 $sentencia = $connect->prepare("SELECT * FROM students  WHERE students.idstu= '$id';");
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
<form enctype="multipart/form-data" method="POST"  autocomplete="off">
<div class="row">
  <div class="col-md-6 col-lg-4">
   <div class="form-group">
    <label for="email">DNI del alumno</label>
    <input readonly type="text"  maxlength="8" value="<?php echo  $f->dnist; ?>"  class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="txtdnit" placeholder="ejm: 76765654">
</div>   
  </div>
  <div class="col-md-6 col-lg-4">
   <div class="form-group">
    <label for="email">Nombre del alumno</label>
    <input type="text"  class="form-control" value="<?php echo  $f->nomstu; ?>" id="nombres" name="txtnamst" readonly placeholder="ejm: laura">
    
</div>   
  </div>
  <div class="col-md-6 col-lg-4">
    <div class="form-group">
    <label for="email">Edad del alumno</label>
    <input type="text"  class="form-control" value="<?php echo  $f->edast; ?>" name="txtedst" readonly placeholder="ejm: 15 años">
  
</div>  
  </div>      
</div>

<div class="row">
  <div class="col-md-6 col-lg-4">
    <div class="form-group">
    <label for="email">Direccion del alumno</label>
    <input type="text"  class="form-control" value="<?php echo  $f->direce; ?>" name="txtdirst" readonly placeholder="ejm: av. larco">

</div>  
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="form-group">
    <label for="email">Correo del alumno</label>
    <input type="email"  class="form-control" value="<?php echo  $f->correo; ?>" name="txtcorst" readonly placeholder="ejm: alumno@gmail.com">
   
</div>  
  </div>  

  <div class="col-md-6 col-lg-4">
    <div class="form-group">
    <label for="email">Sexo del alumno</label>
    <span class="badge badge-success"><?php echo  $f->sexes; ?></span>

</div>  
  </div>  
</div>

<div class="row">
    <div class="col-md-6 col-lg-4">
     <div class="form-group">
    <label for="email">Nacimiento del alumno</label>
    <input type="date" value="<?php echo  $f->fenac; ?>" class="form-control" name="txtnacst" readonly >
 
</div>   
    </div>

    <div class="col-md-6 col-lg-4">
    <div class="form-group">
    <label for="email">Estado del alumno</label>
    

    <?php    if($f->state =='1')  { ?> 

    <span class="badge badge-success">Activo</span>
               <?php  }   else {?> 
    <span class="badge badge-danger">Inactivo</span>
     <?php  } ?>

</div>  
  </div>

  <div class="col-md-6 col-lg-4">
     <div class="form-group">
    <label for="email">Nombre de usuario del alumno</label>
    <input type="text" value="<?php echo  $f->usuario; ?>" class="form-control" name="txtnacst" readonly >
 
</div>   
    </div>
    
</div>
<div class="row">
    <div class="col-md-6 col-lg-6">
    <div class="form-group">
    <label for="email">Foto del alumno</label>
    
    <img id="blah" src="../../backend/img/subidas/<?php echo $f->foto; ?>" width="100" heigth="100" alt="your image" style="max-width:90px;" />

</div>   
  </div>
</div>

  <hr>

</form>

<?php endforeach; ?>
  
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
    header('Location: ../index.php');
 } ?>