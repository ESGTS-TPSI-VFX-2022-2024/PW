<?php 

// variaveis para inserir
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

// inserção de dados
$sql = "INSERT INTO alunos (nome, email, contacto) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

// adicionar parametros (s - string, i - inteiro, d - double, b - blob)
mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $contacto);

mysqli_stmt_execute($stmt);

// verifica se a inserção foi bem sucedida
if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "Inserção bem sucedida";
} else {
    echo "Inserção falhou : " .  mysqli_stmt_error($stmt);
}

// Fecha a ligação
mysqli_close($conn);
?>