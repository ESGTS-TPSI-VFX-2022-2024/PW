<?php 

// variaveis para inserir
$id = $_GET["id"];
$nome = $_GET["nome"];
$email = $_GET["email"];
$contacto = $_GET["contacto"];

// Configuração de ligação a base de dados
$servername = "localhost";
$username = "root";
$senha = "";
$dbname = "03012024";

// Cria a ligação
try {
    $conn = mysqli_connect($servername, $username, $senha, $dbname);
} catch (Exception $e) {
    echo "Ligação falhou: " . mysqli_connect_error();
}

// atualização de dados
$sql = "UPDATE alunos SET nome = ?, email = ?, contacto = ? WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);

// adicionar parametros (s - string, i - inteiro, d - double, b - blob)
mysqli_stmt_bind_param($stmt, "sssi", $nome, $email, $contacto, $id);

mysqli_stmt_execute($stmt);

// verifica se a inserção foi bem sucedida
if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "Atualização bem sucedida";
} else {
    echo "Atualização falhou : " .  mysqli_stmt_error($stmt);
}

// Fecha a ligação
mysqli_close($conn);
?>