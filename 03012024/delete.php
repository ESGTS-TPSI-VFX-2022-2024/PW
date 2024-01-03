<?php 

// variaveis para inserir
$id = $_GET["id"];

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

// Delete de dados
$sql = "DELETE FROM alunos WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);

// adicionar parametros (s - string, i - inteiro, d - double, b - blob)
mysqli_stmt_bind_param($stmt, "i", $id);

mysqli_stmt_execute($stmt);

// verifica se a inserção foi bem sucedida
if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "Delete bem sucedida";
} else {
    echo "Delete falhou : " .  mysqli_stmt_error($stmt);
}

// Fecha a ligação
mysqli_close($conn);
?>