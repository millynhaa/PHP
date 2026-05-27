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
    }
  </style>
</head>

<body>
  <div id="principal">
    <form action="login.php" method="POST">
      <div>
        <h1>Login<h1>
      </div>

      <br>
      <div class="caixa">
        <label for="usuario">Usuário:</label><br>
        <input type="text" name="usuario">
      </div>

      <br>
      <div class="caixa">
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha">
      </div>

      <br>
      <div>
        <input id="botao" type="submit" value="Enviar">
      </div>
    </form>
  </div>

  <div id="dados">
    <?php
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];
      echo "Nome: " .$usuario . "<br>" . "Senha: " .$senha;

    if ($usuario == "Camilly" && $senha == "083")
      header["location: site.html"];
    else
      echo "Nome: ".$usuario . "<br>" . "Senha: ".$senha;

    ?>
  </div>


</body>

</html>