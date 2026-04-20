<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);



// 1. Conectar ao banco
include("../config/conexao.php");

// 2. Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// 3. Criar comando SQL
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

// 4. Executar e verificar
if ($conn->query($sql) === TRUE) {
    header("Location: listar.php");
    exit;
} else {
    echo "Erro: " . $conn->error;
}


?>
