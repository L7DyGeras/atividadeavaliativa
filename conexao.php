<?php
$host = 'localhost'; // ou o endereço do seu servidor MySQL
$db = 'floresta_verde'; // nome do banco de dados
$user = 'root'; // seu usuário do MySQL
$pass = ''; // sua senha do MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
}
?>
