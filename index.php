<html lang="en">
<head>
  
  <title>PHP</title>

</head>
<body style="background-color: white;">
 <h1>Introdução ao PHP<h1>
  <?php
    $usuario = "Camilly";
    echo "Primeiro exemplo de PHP";
    echo "<br>";
    echo "Bom dia, ", $usuario;

    $salario = 5000;
    $aumento = $salario * 0.10;
    echo "<br><br> Seu salário é padrão ".$salario;
    echo "<p style='color:red;'> Seu novo salário é ".$salario + $aumento."<p>";
  ?>
</body>
</html>