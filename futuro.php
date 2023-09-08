<?php
	if(!isset($_SESSION)){
    	session_start();
	}

	$id_user = $_SESSION['idUsuario'];

	if(!isset ($_SESSION['idUsuario'])) {
    	header('Location: login.php');
	}

	require_once('evento/action/conexao.php');
	date_default_timezone_set('America/Sao_Paulo');

	$database = new Database();
	$db = $database->conectar();

	$sql = "SELECT id_evento, titulo, descricao, inicio, termino, cor, fk_id_destinatario, fk_id_remetente, status FROM eventos as e
	LEFT JOIN convites as c ON e.id_evento = c.fk_id_evento
	Where fk_id_usuario = $id_user";
	$req = $db->prepare($sql);
	$req->execute();
	$events = $req->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="css/futuro.css">
    <title>Forms</title>
 </head>
 <body>

 <div class="cenario">
	<a href="index.php" class="volt">Voltar</a>
  <div class="cafe">
    <span class="maquina"></span>
    <span class="graomaior"></span>
  </div>
  <div class="computador">
    <span class="tela"></span>
    <span class="ball"></span>
    <span class="teclado"></span>
    <span class="botao-cafe"></span>
  </div>
  <div class="denis-flat">
    <div class="cabeca">
      <span class="cabelo"></span>
      <span class="cabelo"></span>
      <span class="cabelo"></span>
      <span class="cabelo"></span>
      <span class="cabelo rabo"></span>
      <span class="orelha"></span>
      <span class="cabeca"></span>
      <span class="olho esquerdo"></span>
      <span class="olho direito"></span>
      <span class="nariz"></span>
      <span class="barba"></span>      
      <span class="boca"></span>
    </div>
    <div class="corpo">
      <span class="tronco"></span>
      <span class="braco direito"></span>
      <span class="braco esquerdo"></span>    
    </div>
  </div>
  
  <div class="mesa">
    <span class="barra"></span>
    <span class="barra"></span>
    <span class="baixo"></span>
    <span class="baixo"></span>
    <span class="baixo"></span>
    <span class="baixo sombreado"></span>
    <span  class="sombra"></span>
  </div>
  <div>
    
  </div>
  <div class="texto"> 
    <span>Essa área do Valor Real ainda não está pronta :(</span>
  </div>
</div>
</body>
</html>