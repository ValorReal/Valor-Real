<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Login</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="Tela\style\login.css">>
</head>
<body>
  <div class="main">
    <!-- Formulário de Registro -->
    <div class="container a-container" id="a-container">
      <form class="form" id="a-form" method="" action="">
        <h2 class="form_title title">Criar Conta</h2>

        <div class="form__icons">
          <!-- Ícones de redes sociais -->
        </div>
        
        <span class="form__span">ou use o email para se registrar</span>
        <input class="form__input" type="text" placeholder="Nome">
        <input class="form__input" type="text" placeholder="Email">
        <input class="form__input" type="password" placeholder="Senha">
        <input class="form__input" type="checkbox" id="adminCheckbox">
        <label for="adminCheckbox">Registrar como Administrador</label>
        <button class="form__button button submit">REGISTRAR</button>
      </form>
    </div>

    <!-- Formulário de Login -->
    <div class="container b-container" id="b-container">
      <form class="form" id="b-form" method="" action="">
        <h2 class="form_title title">Entrar no Site</h2>

        <div class="form__icons">
          <!-- Ícones de redes sociais -->
        </div>

        <span class="form__span">ou use sua conta de email</span>
        <input class="form__input" type="text" placeholder="Email">
        <input class="form__input" type="password" placeholder="Senha">
        <a class="form__link">Esqueceu sua senha?</a>
        <button class="form__button button submit">ENTRAR</button>
      </form>
    </div>

    <!-- Alternador entre Formulários -->
    <div class="switch" id="switch-cnt">
      <div class="switch__circle"></div>
      <div class="switch__circle switch__circle--t"></div>
      <div class="switch__container" id="switch-c1">
        <h2 class="switch__title title">Bem-vindo de volta!</h2>
        <p class="switch__description description">Para continuar conectado conosco, faça login com suas informações pessoais.</p>
        <button class="switch__button button switch-btn">ENTRAR</button>
      </div>

      <div class="switch__container is-hidden" id="switch-c2">
        <h2 class="switch__title title">Olá, amigo!</h2>
        <p class="switch__description description">Informe seus detalhes pessoais e comece sua jornada conosco.</p>
        <button class="switch__button button switch-btn">REGISTRAR</button>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
