<!DOCTYPE html>
<html>

<head>
    <title>Criar Conta</title>
</head>

<body>
    <h2>Criar Conta</h2>
    
    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuário"><br><br>
        <input type="password" name="senha" placeholder="Senha"><br><br>
        <button type="submit">Criar Conta</button>
    </form>

    <?php
    include "conectar.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {

            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$usuario', '$senha')";

            if (mysqli_query($conexao, $sql)) {
                echo "<p>Conta criada com sucesso!</p>";
            } else {
                echo "<p>Erro: " . mysqli_error($conexao) . "</p>";
            }

            mysqli_close($conexao);

        } else {
            echo "<p>Preencha todos os campos!</p>";
        }
    }
    ?>

    



</body>

</html>