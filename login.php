<html>

<head>
  <title>Login</title>

  <style>
    p {
      color: green;
    }
    div {
      border: 1px solid;
      border-radius: 10px;
    } 
    #principal{
      width: 250px;
      padding: 20px;
      margin: auto;
      background: linear-gradient(to right,blue,purple);
    }
    h1{
      text-align: center;
    }
    .caixa{
      padding: 15px;
    }
    input{
      border-radius: 20px;
    }
    #botao{
      width: 100%;
    }
  </style>
</head>

<body>
  <p>
    <?php echo date('d/m/Y'); ?>
  <p>

  <div id="principal">
    <form action="" method="POST">
      <div >
        <h1>Login<h1>
      </div>

      <br>
      <div class="caixa">
        <label for="">Usuário:</label><br>
        <input type="text" name="usuario">
      </div>

      <br>
      <div class="caixa">
        <label for="">Senha:</label><br>
        <input type="password" name="senha">
      </div>

      <br>
      <div>
        <input id="botao" type="submit" value="Enviar">
      </div>

    </form>
  </div>

</body>

</html>