<?php
  include "conectar.php";
  echo "Inserindo dados...";

  $sql = "insert into usuario(usuario, senha) values('Alex','1407')";

  if (mysqli_query($conexao, $sql)){
    echo "Cadastrado com sucesso";
  }else{
    echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
  }
  mysqli_close($conexao);
?>