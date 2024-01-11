<?php
$servername = "localhost"; // normalmente é localhost
$username = "root"; // seu nome de usuário do MySQL
$password = ""; // sua senha do MySQL
$dbname = "Brasileirao2024"; // nome do seu banco de dados

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>