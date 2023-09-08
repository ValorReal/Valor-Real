<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
    
    <nav id="nav">
        <ul class="navbar-list">
            <li class="navbar-item"><a href="Tela\index.php">Página Inicial</a></li>
            <li class="navbar-item"><a href="">Sobre Nós</a></li>
            <li class="navbar-item"><a href="Tela\Chat.php">Chat</a></li>
            <li class="navbar-item"><a href="Login.php">Login</a></li>
        </ul>
    </nav>
    <div id="Navbar">
    <main>
		<div id="slider">

			<div class="slider-inner">
				<div id="slider-content">
					<div class="meta">Senac Bauru</div>
					<h2 id="slide-title">Turma 1</h2>
					<span data-slide-title="0">Turma 1</span>
					<span data-slide-title="1">Turma 1</span>
					<div class="meta">Terceiro Colegial</div>
					<div id="slide-status"></div>
					<span data-slide-status="0"></span>
					<span data-slide-status="1"></span>
				</div>
			</div>

			<img src="Imagem1.jpg" />
			<img src="Imagem2.jpg" />

			<div id="pagination">
				<button class="active" data-slide="0"></button>
				<button data-slide="1"></button>
			</div>

		</div>
	</main>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-40525870-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-40525870-5');
</script>

	</body>

</html>