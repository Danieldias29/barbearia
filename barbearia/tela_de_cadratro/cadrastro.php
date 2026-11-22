<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="stalicadras.css">
</head>
<body>

  <div class="register-container">
    <h2>Criar conta</h2>

    <form action="#" method="POST">
      <div class="input-group">
        <label for="name">Nome completo</label>
        <input type="text" id="name" name="name" placeholder="Seu nome" required>
      </div>

      <div class="input-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
      </div>

      <div class="input-group">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres" minlength="8" required>
      </div>

      <div class="input-group">
        <label for="confirm-password">Confirmar senha</label>
        <input type="password" id="confirm-password" name="confirm-password" placeholder="Repita a senha" minlength="8" required>
      </div>
        
      <div class="terms">
        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">Concordo com os <a href="#">Termos de Uso</a> e a <a href="#">Política de Privacidade</a>.</label>
      </div>

      <button type="submit" class="btn-register">Cadastrar</button>
    </form>

    <div class="login-link">
      Já tem uma conta? <a href="..\user login\login.php">Entrar</a>
    </div>
  </div>

</body>
</html>
