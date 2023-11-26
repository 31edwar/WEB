
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Pigga landing page.">
    <meta name="author" content="Devcrud">
    <link rel="icon" type="image/x-icon" href="assets/imgs/fav.ico">
    
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pigga.css">
    <?php require_once('base_de_datos/conexion_pepido.php');?>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- First Navigation -->
    <nav class="navbar nav-first navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo_pa.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#home">LLÁMENOS: : <span class="pl-2 text-muted">+573147754311</span></a>
                </li>                   
            </ul>
        </div>
    </nav>
    <!-- End of First Navigation --> 
    <!-- Second Navigation -->
    <nav class="nav-second navbar custom-navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"> 
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Acerca de nosotros</a>
                    </li>
                    <li class="nav-item">
                       
                        <a class="nav-link" href="#service">Nuestro servicio</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testimonios</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul> 
            </div>
            <div class="dropdown">
            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="opcionesDropdown" data-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>      <?php
// Iniciar la sesión
session_start();

// Verificar si hay una sesión activa
if (isset($_SESSION['correo_electronico'])) {
    $correo_electronico = $_SESSION['correo_electronico'];
    echo " $correo_electronico";
} else {
    echo "No has iniciado sesión.";
}
?>           </button>
            <ul class="dropdown-menu" aria-labelledby="opcionesDropdown">
                <li><a class="dropdown-item" href="admi.php">Administrador</a></li>
                
                <li><a class="dropdown-item" href="login.php">Cerrar cession</a></li>
           

                
            </ul>
            
    </nav>
    <!-- End Of Second Navigation -->
    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <img src="assets/imgs/logo_pa.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="logo">
            <h1 class="subtitle">Bienvenido a nuestro restaurante</h1>
            <h1 class="title">La  Paila</h1> 
            <a class="btn btn-primary mt-3" href="#book-table">Reserva Una Mesa</a> 
        </div>      
    </header>
    <!-- End Of Page Header --> 
    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center">                
                <div class="col-md-6">
                    <h6 class="section-subtitle">Horarios de apertura</h6>
                    <h3 class="section-title">Horarios de trabajo</h3>
                    <p class="mb-1 font-weight-bold">Lunes a jueves:  <span class="font-weight-normal pl-2 text-muted">7:00 am - 12:00 pm</span></p>
                    <p class="mb-1 font-weight-bold">Viernes a sábado:  <span class="font-weight-normal pl-2 text-muted">77:00 am - Medianoche</span></p>
                    <p class="mb-1 font-weight-bold">Sábado a domingo:  <span class="font-weight-normal pl-2 text-muted">9:00 am - 12:00 pm</span></p>
            
                    <a href="#book-table" class="btn btn-primary btn-sm w-md mt-4">Reserva Una Mesa</a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-1.jpg" class="w-100 rounded shadow">
                        </div>
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-2.jpg" class="w-100 rounded shadow">
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="section-devider my-6 transparent"></div>
            <div class="row align-items-center">
                <div class="col-md-6">
                <h6 class="section-subtitle">La Gran Historia</h6>
                <h3 class="section-title">Nuestro Viaje Culinario</h3>

                    <p>La gran historia Nuestro viaje culinario Es muy importante que el cliente preste atención al proceso adipiscente. ¿Este de aquel, o no lo conocen, cegados por el placer de rechazarnos?</p>
                </div>
                <div class="col-md-6 order-1 order-sm-first">
                    <div class="row">
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-3.jpg" class="w-100 rounded shadow">
                        </div>
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-4.jpg" class="w-100 rounded shadow">
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Service Section -->
    <section id="service" class="pattern-style-4 has-overlay">
        <div class="container raise-2">
            <h6 class="section-subtitle text-center">Comida destacada</h6>
            <h3 class="section-title mb-6 pb-3 text-center">Platos especiales comida destacada</h3>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <a href="javascrip:void(0)" class="custom-list">
                        <div class="img-holder">
                            <img src="assets/imgs/pastel.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                        </div>
                        <div class="info">
                            <div class="head clearfix">
                                <h5 class="title float-left">Pastel de Pollo</h5>
                                <p class="float-right text-primary">$25</p>
                            </div>
                            <div class="body">
                                <p>La carne se deshace en capas, liberando aromas tentadores que te invitan a sumergirte en su sabor.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-4">
                    <a href="javascrip:void(0)" class="custom-list">
                        <div class="img-holder">
                            <img src="assets/imgs/pescado.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                        </div>
                        <div class="info">
                            <div class="head clearfix">
                                <h5 class="title float-left">Sopa De Queso</h5>
                                <p class="float-right text-primary">$35</p>
                            </div>
                            <div class="body">
                                <p>La mezcla de vegetales frescos, cuidadosamente cortados en trozos generosos, agrega una explosión de color y sabor.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-4">
                    <a href="javascrip:void(0)" class="custom-list">
                        <div class="img-holder">
                            <img src="assets/imgs/sopa.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                        </div>
                        <div class="info">
                            <div class="head clearfix">
                                <h5 class="title float-left">Sancocho De Pollo</h5>
                                <p class="float-right text-primary">$18</p>
                            </div>
                            <div class="body">
                                <p>¡Disfruta de este festín reconfortante que une pasado y presente en un plato humeante de sancocho de pollo!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-4">
                    <a href="javascrip:void(0)" class="custom-list">
                        <div class="img-holder">
                            <img src="assets/imgs/bandeja.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                        </div>
                        <div class="info">
                            <div class="head clearfix">
                                <h5 class="title float-left">Pescado Frito</h5>
                                <p class="float-right text-primary">$30</p>
                            </div>
                            <div class="body">
                                <p>El aroma seductor de la fritura impregna el aire, invitándote a sumergirte en una experiencia culinaria que va más allá del sabor.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-4">
                    <a href="javascrip:void(0)" class="custom-list">
                        <div class="img-holder">
                            <img src="assets/imgs/sancocho.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                        </div>
                        <div class="info">
                            <div class="head clearfix">
                                <h5 class="title float-left">Bandeja Paisa</h5>
                                <p class="float-right text-primary">$24</p>
                            </div>
                            <div class="body">
                                <p> ¡Una experiencia culinaria que resume la hospitalidad y la delicia colombianas!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-4">
                    <a href="javascrip:void(0)" class="custom-list">
                        <div class="img-holder">
                            <img src="assets/imgs/arroz.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                        </div>
                        <div class="info">
                            <div class="head clearfix">
                                <h5 class="title float-left">Arroz De Camaron</h5>
                                <p class="float-right text-primary">$44</p>
                            </div>
                            <div class="body">
                                <p>La base del arroz, cocido a la perfección, sirve como telón de fondo para la estrella del plato: los camarones. </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>                  
        </div>
    </section>
    <!-- End of Featured Food Section -->

    <!-- Menu Section -->
    <section class="has-img-bg">
        <div class="container">
            <h6 class="section-subtitle text-center"></h6>
            <h3 class="section-title mb-6 text-center">Menu</h3>
            <div class="card bg-light">
                <div class="card-body px-4 pb-4 text-center">                   
                    <div class="row text-left">
                        <div class="col-md-6 my-4">
                            <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        Sancocho De Pollo
                                        <p class="mt-1 mb-0">¡Disfruta de este festín reconfortante que une pasado y presente en un plato humeante de sancocho de pollo!</p>
                                    </div>
                                    <h6 class="float-right text-primary">$12</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 my-4">
                            <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        Arroz de Camaron
                                        <p class="mt-1 mb-0">La base del arroz, cocido a la perfección, sirve como telón de fondo para la estrella del plato: los camarones.</p>
                                    </div>
                                    <h6 class="float-right text-primary">$23</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 my-4">
                            <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        Sopa De Queso
                                        <p class="mt-1 mb-0">La mezcla de vegetales frescos, cuidadosamente cortados en trozos generosos, agrega una explosión de color y sabor.</p>
                                    </div>
                                    <h6 class="float-right text-primary">$32</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 my-4">
                            <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        Bandeja Paisa
                                        <p class="mt-2 mb-0">¡Una experiencia culinaria que resume la hospitalidad y la delicia colombianas!</p>
                                    </div>
                                    <h6 class="float-right text-primary">$17</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 my-4">
                            <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        Pescado Frito
                                        <p class="mt-2 mb-0">El aroma seductor de la fritura impregna el aire, invitándote a sumergirte en una experiencia culinaria que va más allá del sabor.</p>
                                    </div>
                                    <h6 class="float-right text-primary">$21</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 my-4">
                            <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        Pastel De Pollo
                                        <p class="mt-2 mb-0">La carne se deshace en capas, liberando aromas tentadores que te invitan a sumergirte en su sabor.</p>
                                    </div>
                                    <h6 class="float-right text-primary">$10</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    
       <!-- Book Table Section -->
       
                <form action="home.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control" name="nombre_p" id="nombre" placeholder="Nombre" required>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" name="mesa" id="mesa" placeholder="Mesa" required>
    </div>
    <div class="form-group">
        <select class="form-select" name="platillo" aria-label="Default select example">
            <option selected>Seleccione su platillo</option>
            <option value="Sopa De Queso">Sopa De Queso</option>
            <option value="Sancocho">Sancocho</option>
            <option value="Pastel De pollo">Pastel De pollo</option>
            <option value="Pescado Frito">Pescado Frito</option>
            <option value="Arroz De Camaron">Arroz De Camaron</option>
            <option value="Bandeja Paisa">Bandeja Paisa</option>
        </select>
    </div>
    <div class="form-group">
        <select class="form-select" name="pago" aria-label="Default select example">
            <option selected>Tipo de Pago</option>
            <option value="Efectivo">Efectivo</option>
            <option value="Paypal">Paypal</option>
            <option value="Nequi">Nequi</option>
            <option value="Bancolombia">Bancolombia</option>
            
        </select>
    </div>
    <div class="styled-input wide">
        <textarea name="observacion" placeholder="Observación" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Reservar Un pedido</button>
</form>



                </div>
            </div>
        </div>
    </section>
    <!-- End OF Book Table Section -->

                </div>
            </div>                  
        </div>
    </section>
    <!-- End of Menu Section -->
    
    
    <!-- Testmonial Section -->
    <section id="testmonial" class="pattern-style-3">
        <div class="container">
            <h6 class="section-subtitle text-center">Best Clients</h6>
            <h3 class="section-title mb-5 text-center">Testmonials</h3>

            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">John Doe</h6>
                                    <small class="text-muted mb-0">Business Analyst</small>     
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar-1.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Maria Garcia</h6>
                                    <small class="text-muted mb-0">Insurance Agent</small>      
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar-2.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Mason Miller</h6>
                                    <small class="text-muted mb-0">Residential Appraiser</small>        
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->
    <?php require_once('base_de_datos/conexion_reserva.php');?>


                </div>
            </div>
        </div>
    </section>
    <!-- End OF Book Table Section -->
    <!-- Prefooter Section  -->
    <div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
        <div class="container">
            <div class="row justify-content-between align-items-center text-center">
                <div class="col-md-3 text-md-left mb-3 mb-md-0">
                    <img src="assets/imgs/logo_pa.svg" width="100" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="mb-0">
                </div>
                <div class="col-md-9 text-md-right">
                    <a href="#" class="px-3"><small class="font-weight-bold">Nuestra empresa</small></a>
                    <a href="#" class="px-3"><small class="font-weight-bold">Centro de ayuda</small></a>
                </div>
               
    </div>
    <!-- End of PreFooter Section -->

      <!-- Site footer -->
      <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
          <h6 class="section-subtitle">Horarios de apertura</h6>
                    <h3 class="section-title">Horarios de trabajo</h3>
                    <p class="mb-1 font-weight-bold">Lunes a jueves:  <span class="font-weight-normal pl-2 text-muted">7:00 am - 12:00 pm</span></p>
                    <p class="mb-1 font-weight-bold">Viernes a sábado:  <span class="font-weight-normal pl-2 text-muted">77:00 am - Medianoche</span></p>
                    <p class="mb-1 font-weight-bold">Sábado a domingo:  <span class="font-weight-normal pl-2 text-muted">9:00 am - 12:00 pm</span></p>
            
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Sobre nostros</h6>
            <ul class="footer-links">
              <li><a href="">llamanos +573147754311</a></li>
              <li><a href="">pailasuort@gmail.com</a></li>
              
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Servicio</h6>
            <ul class="footer-links">
              <li><a href="">Reserva</a></li>
              <li><a href="">Pedido</a></li>
              <li><a href="">Contacto</a></li>

            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Pigga js -->
    <script src="assets/js/pigga.js"></script>
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>

    <style >
        .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style>

</body>
</html>
