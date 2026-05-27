<?php
   $usuario = $_GET["usuario"];
   $produto = $_GET["produto"];
   $preco = $_GET["preco"];

   echo "Bom dia, ".$usuario. ".<br>";
   echo "Você comprou ".$produto. ".<br>";
   echo "Total: R$ ".$preco;
?>
  