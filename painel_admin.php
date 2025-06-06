<?php   

session_start();

// Verificar se o usuário está cadastrado como administrador. Se não estiver, redirecionamos para a página de login novamente. Agora, se o usuário estiver cadastrado como administrador, ele terá acesso a partes do nosso site que são restritas.

if(!isset($_SESSION['admin_logado'])){
    header("Location: login.php");
    exit();
}

// Usar exit() após um redirecionamento é considerada uma prática de programação segura. Previne a execução de código subsequente
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do administrador</title>
</head>  

    <h2>Seja Bem-Vindo, ADMINISTRADOR</h2>

    <a href="cadastrar_administrador.php">
    <button>Cadastrar Administrador</button></a>

    <a href="listar_administrador.php">
    <button>Listar Administrador</button></a>

    <a href="cadastrar_produto.php">
    <button>Cadastrar Produto</button></a>

    <a href="listar_produto.php">
    <button>Listar Produtos</button></a>
</body>
</html>