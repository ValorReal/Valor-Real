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
        <div class="card-login">
            <h1>Valor<br>Real</h1>
            <img src="imagens/logovalor.png" class="left-login-image" alt="imagem principal">
            
            <form action="logar.php" method="post">
                <h2>Login</h2>
                <div class="text-field">
                    <label  for="email">E-Mail</label>
                    <input type="text" name="email" placeholder="Insira seu E-Mail."> 
                </div>
                <div class="text-field">
                    <label for="password">Senha</label>
                    <input type="password" name="password" placeholder="Senha">
                </div>
                <button class="btn-login" type="submit">Login</button>
            </form> 
            <div class="dcads">
            <a href="cadastro.php" class="cads">Cadastrar-se</a>
            </div>
        </div>
    </div>
    <div class="container">
    <footer>&copy; Darruiz 2023</footer>
</div>

</body>
</html>
