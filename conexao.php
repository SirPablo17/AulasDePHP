<?php 

//Configurações do banco de dados

$host = 'localhost';
$db = 'Projeto';
$user = 'root';
$pass = 'P@$$w0rd';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Criando a conexão com o banco de dados pdo


try {
    $pdo = new PDO($dsn, $user,$pass);
    echo "Conexão com o banco de dados foi bem sucedida";
} 
catch (PDOExeption $error){
    echo "Erro ao tentar conectar com o Banco de Dados <p>".$error;
}