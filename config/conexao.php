<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "cadastro";

// Criando conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificando erro
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>

