<?php
	if(!isset($_SESSION)){
    	session_start();
	}

	$id_user = $_SESSION['id'];

	if(!isset ($_SESSION['id'])) {
    	header('Location: login.php');
	}

	require_once('evento/conexao.php');
	date_default_timezone_set('America/Sao_Paulo');

	$database = new Database();
	$db = $database->conectar();
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Valor Real</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link href="favicon.ico" rel="icon">

 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet"> 

   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/lightbox.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">


    <link href="css/bootstrap.min.css" rel="stylesheet">

   <link rel="stylesheet" href="css/plfin.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    
 
  
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="imagens/logovalor.png" alt="Icon">
            <h1 class="  brand-text">Valor Real</h1>

        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link wh">Sobre</a>
                
                <div class="nav-item dropdown">
                    
                </div>
                <a href="contact.php" class="nav-item nav-link">Contato</a>
            </div> 
            
            <?php 
            if (!isset($_SESSION['id'])) {
            echo '
            <a href="login.php" class="btn btn-primary">Logar<i class="fa fa-arrow-right ms-3"></i></a>
        </div>'; 
            }
        ?>
            <?php 
            if (isset($_SESSION['id'])) {
            echo '
            <a href="userarea.php" class="btn btn-primary">Perfil<i class="fa fa-arrow-right ms-3"></i></a>
        </div> 
        |
        <a href="logout.php" class="btn btn-primary">Sair<i class="fa fa-arrow-right ms-3"></i></a>
        </div>';  
        
            }
        ?>
    </nav> 

    

<div class="prymary">



<a  href="planilhas\empresacon.xlsx">Clique aqui para baixar!</a>
<br> 
<p>Planilha de DRE para PJ.</p>


</div>














    
    <div class="custom-footer">
    <div class="container py-5">
    
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="cnrt" href="https://github.com/organizations/ValorReal/">Valor Real</a>, desenvolvido por João Darruiz.
                </div>
               
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/lightbox.min.js"></script>


    <script src="js/main.js"></script>
</body>

</html>