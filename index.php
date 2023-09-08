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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ACESSOU BB
</body>
</html>
