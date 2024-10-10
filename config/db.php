<?php
$host = 'localhost';
$dbname = 'erp';
$port = '5432';
$username = 'postgres'; // Substitua pelo seu usuário do MySQL
$password = ''; // Substitua pela sua senha do MySQL
try { // execções
    $pdo = new PDO( //prioridade(PDO)
        "pgsql:host=$host;port=$port;dbname=$dbname", //Utiliza os dados dados de L. 2-4
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // "Setar" atributos, caso de errado retornar algum dado
} catch (PDOException $e) { // Erro descrito pela L.13
    die('Conexão falhou: ' . $e->getMessage()); // Mata o código com a falha e a execução da mensagem
}

//127.0.0.1