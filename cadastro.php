<?php 
require_once 'usuarios.php'; 
$u = new usuario;
require_once 'evento/conexao.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastrar</title>
</head>
<body>
    
<div class="container" >
    <a class="links" id="paracadastro"></a>

    
    <div class="content">      
   
      <div id="cadastro">
        <form method="post" action=""> 
          <h1>Cadastro</h1> 
          
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Darruiz DLC" />
          </p>
          
          <p> 
            <label for="dataan_cad">Sua data de nascimento</label>
            <input id="dataan_cad" name="dataan_cad" required="required" type="date" placeholder="Sua data de nascimento"/>
          </p> 
          <p> 
    <label for="telefone_cad">Seu Telefone</label>
    <input id="telefone_cad" name="telefone_cad" type="number" placeholder="Seu Telefone"/>
</p>

          <p> 
            <label for="email_cad">Seu E-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="Seu E-mail"/>
          </p> 

          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="Sua senha BB"/>
          </p> 

          <p> 
            <label for="senha_con">Confirmar senha</label>
            <input id="senha_con" name="senha_con" required="required" type="password" placeholder="Confirme sua senha BB"/>
          </p>
          
          <p>   
            <input type="submit" value="Cadastrar"/> 
          </p>
          
          <p class="link">  
            Já tem conta?
            <a href="login.php"> Ir para Login </a>
          </p>
        </form>
      </div>
      
    </div>
    <footer>&copy; Darruiz 2023</footer>
  </div> 
  <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nome = addslashes($_POST['nome_cad']);
    $email = addslashes($_POST['email_cad']);
    $dataan = addslashes($_POST['dataan_cad']); 
    $senha = addslashes($_POST['senha_cad']);
    $confisenha = addslashes($_POST['senha_con']);  
    $telefone = addslashes($_POST['telefone_cad']); 

    if (!empty($nome) && !empty($senha) && !empty($confisenha) && !empty($email) && !empty($dataan)) {
      $database = new Database();
        $connection = $database->conectar(); 

        $u->conectar("valor", "localhost", "root", ""); 

        if ($u->msgErro == "") {
            if ($senha == $confisenha) { 
              if ($u->cadastrar($nome, $senha, $email, $dataan, $telefone)) {   
                ?>
                    <div id="msg-sucesso">
                    Cadastrado com sucesso! Volte para fazer o login!
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="msg-erro">
                    Erro ao cadastrar no sistema!
                    </div>
                    <?php
                }
            } else { 
                ?>
                <div class="msg-erro">
                Senha e Confirmar senha não correspondem!
                </div>
                <?php
            }

            header("location: index.php");
        } else { 
            echo "Erro: ".$u->msgErro;
        }

        $connection = null; 
    } else { 
        ?>
        <div class="msg-erro">
        Preencha todos os campos!
        </div>
        <?php
    }
}
?>

</body>
</html>
