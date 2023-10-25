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
            <h1 class="display-4 text-white mb-3 animated slideInDown">Tipos de CNPJ</h1>
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
        <h1 class="display-5 text-center mb-5 wow fadeInUp floating-title" data-wow-delay="0.1s">Tipos de CNPJ</h1>
        <p class="text-center">
                Esses abaixo são os mais usados, existem mais tipos de CNPJ e regimes tributários.            
        <h1>1. <strong>Empresas Individuais (EI)</strong></h1>
    <p>As Empresas Individuais (EI) são uma forma de empreendimento muito comum no Brasil. Nesse modelo, o empresário é o único dono e responsável por todas as operações da empresa. O CNPJ da EI é vinculado ao CPF do proprietário. Isso significa que o empresário tem responsabilidade ilimitada pelas dívidas da empresa, o que pode ser um risco considerável.</p>
    <p>A principal vantagem da EI é a simplicidade. É fácil de criar, com menos burocracia em comparação com outros tipos de empresas. No entanto, a responsabilidade ilimitada pode ser um fator limitante, uma vez que os bens pessoais do empresário estão em jogo em caso de dívidas.</p>
    <p>Muitos empreendedores individuais preferem a EI quando estão começando pequenos negócios, como consultorias ou comércios locais, devido à simplicidade e à carga tributária menor. No entanto, à medida que os negócios crescem, eles frequentemente migram para estruturas empresariais que oferecem maior proteção patrimonial, como a Sociedade Limitada (Ltda).</p>
    
    <h1>2. <strong>Sociedade Limitada (Ltda)</strong></h1>
    <p>A Sociedade Limitada (Ltda) é uma das formas mais populares de empresas no Brasil. Ela envolve dois ou mais sócios que contribuem com capital para a empresa. O principal benefício é a limitação da responsabilidade dos sócios ao valor de suas cotas, o que protege seus bens pessoais.</p>
    <p>A Ltda oferece flexibilidade na distribuição de lucros e participação dos sócios nos resultados da empresa. Além disso, a gestão pode ser feita de forma mais compartilhada, com a possibilidade de sócios administradores e não administradores.</p>
    <p>No entanto, a Ltda também requer um contrato social bem elaborado que define as regras da sociedade, incluindo a distribuição de lucros, tomada de decisões e outras questões importantes. A Ltda é adequada para pequenas e médias empresas que desejam ter mais de um sócio, compartilhando a gestão e o capital.</p>

    <h1>3. <strong>Sociedade Anônima (S.A.)</strong></h1>
    <p>As Sociedades Anônimas (S.A.) são empresas de capital aberto que emitem ações que podem ser compradas pelo público em geral. Elas são altamente regulamentadas e têm requisitos rigorosos de divulgação. A S.A. é composta por acionistas, que detêm ações representativas de partes da empresa.</p>
    <p>A principal característica das S.A. é a separação entre propriedade e gestão. Os acionistas têm participação na empresa, mas não estão envolvidos na administração do dia a dia. Em vez disso, a empresa é gerenciada por um conselho de administração e executivos.</p>
    <p>As S.A. são usadas por empresas de grande porte que desejam obter capital de investidores públicos. Isso proporciona um alto nível de liquidez para as ações e acesso a um amplo espectro de recursos financeiros. No entanto, elas precisam cumprir uma série de regulamentos e divulgar informações financeiras detalhadas.</p>
    
    <h1>4. <strong>Microempreendedor Individual (MEI)</strong></h1>
    <p>O Microempreendedor Individual (MEI) é uma categoria criada para formalizar pequenos negócios e empreendedores individuais. Para se enquadrar como MEI, o faturamento anual deve ser limitado a um certo valor, e o empresário não pode ser sócio em outra empresa.</p>
    <p>O CNPJ MEI é uma opção atraente devido à simplicidade e ao baixo custo de formalização. Além disso, os impostos são unificados em um valor fixo mensal, o que facilita o cumprimento das obrigações fiscais.</p>
    <p>No entanto, o MEI tem limitações quanto ao faturamento anual e ao número de empregados que podem ser contratados. É adequado para atividades autônomas de pequena escala, como vendedores ambulantes, prestadores de serviços e pequenos comércios.</p>

    <h1>5. <strong>Órgãos Públicos e Entidades Sem Fins Lucrativos</strong></h1>
    <p>CNPJs de órgãos públicos e entidades sem fins lucrativos são usados para conduzir atividades do governo ou promover causas sociais. Órgãos públicos incluem ministérios, prefeituras e autarquias, enquanto entidades sem fins lucrativos podem ser associações, fundações, ONGs e instituições de caridade.</p>
    <p>Essas entidades possuem CNPJs específicos para que possam receber recursos, realizar transações financeiras e cumprir obrigações legais. Os CNPJs de órgãos públicos são amplamente usados para gerenciar recursos e prestar serviços públicos, enquanto os de entidades sem fins lucrativos são fundamentais para a promoção de ações sociais, culturais, ambientais e filantrópicas.</p>
    
    <p>Em resumo, cada tipo de CNPJ no Brasil possui suas características e finalidades únicas, e a escolha do tipo de empresa depende das necessidades, tamanho e estrutura de negócio do empreendedor ou da entidade.</p>

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