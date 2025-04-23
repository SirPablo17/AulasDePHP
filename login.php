<?php
session_start();

//Se a variável de sessão com a mensagem de erro estiver definida

if(isset($_SESSION['mensagem de erro'])){
    echo"<p class='error-message'>".$_SESSION['mensagem_erro']."</p>";//Exibe a mensagem de erro
    unset($_SESSION['mensagem_erro']); //Descarta a variável de sessão
}
?>

<!-- Página HTML de Login -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN DO ADMINISTRADOR</title>
</head>
<body>
        <h2>Login do ADMINISTRADOR</h2>

      
            <form action="processa_login.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name = "nome" required>

                <br><br>

                <label for="nome">Senha:</label>
                <input type="password" id="senha" name = "senha" required>

                <br><br>

                <input type="submit" Value="Entrar">
            </form>



    <?php
        if(isset($_GET['erro'])){
            echo '<p style="color: red";>Nome de usuário ou senha incorretos!</p';
        }
    ?>

</body>
</html>