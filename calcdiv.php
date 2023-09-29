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

   <link rel="stylesheet" href="css/calcdiv.css">
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
    <h1>Calculadora de Dividendos Reinvestidos</h1> 
    <?php 
   if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        echo "<p>para ver o resultado role para baixo</p>";
    } 
    ?>

    <form action="" method="post">
        <label for="cotas">Quantidade de Cotas:</label>
        <input type="number" name="cotas" required><br>

        <label for="valor_cota">Valor Inicial da Cota em R$:</label>
        <input type="number" name="valor_cota" step="0.01" required><br>

        <label for="yield">Yield Anual (%):</label>
        <input type="number" name="yield" step="0.01" required><br>

        <label for="valorizacao">Valorização Anual da Cota (%):</label>
        <input type="number" name="valorizacao" step="0.01" required><br>

        <label for="aporte_mensal">Aporte Mensal Inicial em R$:</label>
        <input type="number" name="aporte_mensal" step="0.01" required><br>

        <label for="aumento_aporte_anual">Aumento Anual do Aporte (%) :</label>
        <input type="number" name="aumento_aporte_anual" step="0.01" required><br>

        <label for="anos">Número de Anos:</label>
        <input type="number" name="anos" required><br>

        <input type="submit" value="Calcular">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cotas = $_POST["cotas"];
    $valor_cota = $_POST["valor_cota"];
    $yield = $_POST["yield"] / 100;
    $valorizacao = $_POST["valorizacao"] / 100;
    $aporte_mensal = $_POST["aporte_mensal"];
    $aumento_aporte_anual = $_POST["aumento_aporte_anual"] / 100; 
    $anos = $_POST["anos"];

    $total_cotas = $cotas;
    $total_dividendos_recebidos = 0;
    $total_aportes = 0;

    echo "<h2>Resultado Anual:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Ano</th><th>Valor de 1 Cota</th><th>Quantidade de Cotas</th><th>Valor Investido</th><th>Aporte Anual</th><th>Dividendos</th><th>Dividendos Reinvestidos</th></tr>";

    for ($i = 1; $i <= $anos; $i++) {
        $valor_cota += $valor_cota * $valorizacao;
        $dividendos = $total_cotas * $valor_cota * $yield;
        $total_dividendos_recebidos += $dividendos;
        
        $aporte_anual = $aporte_mensal * 12;
        $total_aportes += $aporte_anual;

        $cotas_compradas_com_aporte = $aporte_anual / $valor_cota;
        $total_cotas += $cotas_compradas_com_aporte;

       
        $cotas_compradas_com_dividendos = $dividendos / $valor_cota;
        $total_cotas += $cotas_compradas_com_dividendos;

     
        $aporte_mensal += $aporte_anual * $aumento_aporte_anual / 12;

        echo "<tr><td>$i</td><td>R$ " . number_format($valor_cota, 2, ",", ".") . "</td><td>" . number_format($total_cotas, 2, ",", ".") . "</td><td>R$ " . number_format($total_cotas * $valor_cota, 2, ",", ".") . "</td><td>R$ " . number_format($aporte_anual, 2, ",", ".") . "</td><td>R$ " . number_format($dividendos, 2, ",", ".") . "</td><td>R$ " . number_format($cotas_compradas_com_dividendos * $valor_cota, 2, ",", ".") . "</td></tr>";
    }

    echo "</table>";
    echo "<h2>Resultado Após $anos Anos:</h2>";
    echo "<p>Valor Total: R$ " . number_format($total_cotas * $valor_cota, 2, ",", ".") . "</p>";
    echo "<p>Dividendos Recebidos: R$ " . number_format($total_dividendos_recebidos, 2, ",", ".") . "</p>";
    echo "<p>Aporte Total: R$ " . number_format($total_aportes, 2, ",", ".") . "</p>";
}
?>
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