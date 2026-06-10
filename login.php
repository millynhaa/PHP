<html>

<head>
  <title>Login</title>

  <style>
    p {
      color: green;
    }

    div {
      border-radius: 30px;
    }

    #principal {
      width: 250px;
      padding: 20px;
      margin: auto;
      background: linear-gradient(to right, blue, purple);
      color: white;
    }

    #conta button {
      width: 100%;
      background: white;
      color: black;
      border-radius: 20px;
      border: none;
      padding: 8px;
      cursor: pointer;
    }

    h1 {
      text-align: center;
    }

    .caixa {
      padding-top: 15px;
      padding-bottom: 15px;
    }

    input {
      border-radius: 20px;
      width: 100%;
    }

    #botao {
      width: 100%;
      color: white;
      background: dodgerblue;
      border-radius: 20px;
      border: none;
      padding: 8px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div id="principal">
    <form action="login.php" method="POST">
      <div>
        <h1>Login</h1>
      </div>

      <br>
      <div class="caixa">
        <label for="usuario">Usuário:</label><br>
        <input type="text" name="usuario">
      </div>

      <div class="caixa">
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha">
      </div>

      <br>

      <button id="botao" type="submit">Enviar</button><br><br>

      <div id="conta">
        <button type="button" onclick="window.location.href='criar.php'">Criar Conta</button>
      </div>

    </form>
  </div>

  <?php
  include "conectar.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];

      $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
      $resultado = mysqli_query($conexao, $sql);

      if (mysqli_num_rows($resultado) > 0) {
      echo "<p>Login realizado com sucesso!</p>";
      } else {
      echo "<p style='color:red;'>Usuário ou senha incorretos!</p>";
      }

    } else {
      echo "<p style='color:red;'>Preencha todos os campos!</p>";
    }

  }
  ?>

</body>

</html>