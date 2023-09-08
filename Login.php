<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">  
    <title>Tela Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login"> 
            <h1>Pagina teste para <br> login clerison. </h1>
            <img src="imagens/standup-meeting-animate.svg" class="left-login-image" alt="imagem principal">
        </div>  

        <div class="right-login"> 
            
                <form action="logar.php" method="post">
                <div class="card-login">
                <h1>Login</h1>
                    <div class="text-field">
                        <label  for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário"> 
                        <br>
                        <label for="password"> Senha</label>
                        <input type="password" name="password" placeholder="Senha">
                    </div>
                    <button class="btn-login" type="submit">Login</button>
                </form> 
                <a href="cadastro.php" class="cds">Cadastre-se</a>
            </div>
          
        </div>
        <footer>&copy; Darruiz 2023</footer>
    </div>
</body>
</html>
