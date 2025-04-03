<?php

session_start(); // Utilizado para interligar várias páginas

try{
    require_once('conexao.php'); // Requerendo uma única vez que traga o arquivo "conexao.php"

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM ADMINISTRADOR WHERE ADM_NOME = :nome AND ADM_SENHA = :senha AND ADM_ATIVO = 1";

    $query = $pdo->prepare($sql);
    $query->bindParam(':nome',$nome, PDO::PARAM_STR);
    $query->bindParam(':senha',$senha, PDO::PARAM_STR);

    $query->execute();

    if($query->rowCount() > 0){
        $_SESSION['admin_logado'] = true;
        header('Location: painel_admin.php');
    } else {
        $_SESSION['mensagem_erro'] = "Nome de usuário ou senha incorreto";
        header('Location:login.php?erro');
        exit;
    }

} catch (Exception $e){
    $_SESSION['mensagem_erro'] = "Erro de conexão: ".$e->getMessage(); 
    header('Location: ');
}