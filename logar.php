<?php
session_start(); 

require_once 'evento/conexao.php'; 

$database = new Database();
$conexao = $database->conectar(); 

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email']; 
    $senha = sha1($_POST['password']); 

    if (!empty($email) && !empty($senha)) {
        $sql = $conexao->prepare("SELECT id FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha); 
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);
        
        if ($result) {
            $_SESSION['id'] = $result['id']; 
            header("location: index.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Usuário e/ou senha incorretos";
           
            print_r( $_SESSION['login_error']);
            exit();
        }
    } else {
        $_SESSION['login_error'] = "Preencha todos os campos!";
        header("location: login.php");
        print_r( $_SESSION['login_error']);
        exit();
    }
}
?>
