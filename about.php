<?php
    session_start(); 
    
    if (isset($_SESSION['id'])) {
        $id_user = $_SESSION['id']; 
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

    <link rel="stylesheet" href="css/about.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   
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
  
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Sobre </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Sobre</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

               
            </div>
        </div>
    </div>
   
   
    <div class="container-xxl py-5">
    <div class="container">
        <h1 class="display-5 text-center mb-5 wow fadeInUp floating-title" data-wow-delay="0.1s">Quem somos?</h1>
        <p class="text-center">A nossa organização é dedicada a uma causa que busca revolucionar a maneira como as pessoas lidam com suas finanças e obrigações fiscais. 
            No coração do nosso projeto, está a crença de que todos devem ter acesso a ferramentas eficazes e simples para gerir suas finanças pessoais e cumprir com suas 
            obrigações fiscais de forma fácil e acessível. <br> <br>

Estamos firmemente comprometidos em promover a transparência e a inclusão financeira, permitindo que um público mais amplo,
 independentemente de seu nível de conhecimento financeiro, possa tomar as rédeas de sua situação financeira e cumprir com suas
  obrigações tributárias sem estresse ou complexidade desnecessária. <br>
<br>
No GitHub, nossa plataforma open source é o epicentro desse movimento. Através de colaborações globais,
 voluntários apaixonados e desenvolvedores talentosos, estamos construindo e refinando ferramentas que capacitam as pessoas
  a entender melhor suas finanças, gerenciar seus impostos e realizar declarações de forma eficiente. Nossa comunidade é um 
  reflexo do nosso compromisso com a acessibilidade e a simplicidade. <br> <br>

Nossos projetos são alimentados por valores fundamentais de transparência, acessibilidade e colaboração.
 Reconhecemos que a gestão financeira e o cumprimento das obrigações fiscais podem ser desafios significativos,
  mas acreditamos que a tecnologia pode ser uma força poderosa para simplificar esses processos. Com o apoio de nossa 
  comunidade, continuaremos a aprimorar nossas soluções, oferecendo recursos valiosos e informações educacionais para 
  todos que desejam aprimorar suas habilidades financeiras. <br> <br>

À medida que continuamos a avançar em nossa jornada, buscamos ampliar nosso impacto e
 alcançar um público ainda mais amplo, capacitando indivíduos, famílias e pequenas empresas
  a tomar decisões financeiras informadas e a cumprir suas obrigações fiscais de maneira eficaz.
   Estamos comprometidos em fazer a diferença no mundo financeiro e esperamos que você se junte a 
   nós nessa missão emocionante de tornar a gestão financeira mais acessível e descomplicada para
    todos. Juntos, podemos alcançar um futuro onde todos tenham as ferramentas e o conhecimento
     necessários para prosperar financeiramente.</p> 
            <br> 
            <p>Clique logo abaixo e confira nós no GitHub</p><a class="cnrtb" href="https://github.com/organizations/ValorReal/">Valor Real</a>
    </div>
</div>

   
    <div class="container-fluid footer footer text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bauru</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+55 14 99187-7240</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>darruizhomeoffice@gmail.com</p>
                  
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