<?php
session_start(); 

require_once 'evento/conexao.php'; 

$database = new Database();
$conexao = $database->conectar(); 

if (isset($_POST['usuario']) && isset($_POST['password'])) {
    $usuario = $_POST['usuario'];
    $senha = sha1($_POST['password']); 

    if (!empty($usuario) && !empty($senha)) {
        $sql = $conexao->prepare("SELECT id FROM usuarios WHERE nome = :n AND senha = :s");
        $sql->bindValue(":n", $usuario);
        $sql->bindValue(":s", $senha); 
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);
        
        if ($result) {
            $_SESSION['id'] = $result['id']; 
            header("location: index.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Usuário e/ou senha incorretos";
            header("location: login.php");
            exit();
        }
    } else {
        $_SESSION['login_error'] = "Preencha todos os campos!";
        header("location: login.php");
        exit();
    }
}
?>
