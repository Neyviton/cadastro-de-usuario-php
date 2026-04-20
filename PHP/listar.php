<?php
include("../config/conexao.php");

// Consulta no banco
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

    <h1>Usuários cadastrados</h1>

    <div class="login">


    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    

<?php
// Verifica se tem resultados
if ($result->num_rows > 0) {

    // Percorre cada linha
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nome']."</td>
                <td>".$row['email']."</td>
            </tr>";
    }

} else {
    echo "<tr><td colspan='3'>Nenhum usuário cadastrado</td></tr>";
}
?>

</table>

<br>
    <a href="index.php" class="btn-voltar">Voltar</a>

    </div>
</body>
</html>

