<?php 

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

// Consulta à base de dados
$sql = "SELECT * FROM alunos";
$result = mysqli_query($conn, $sql);

// Verifica se existem resultados
if (mysqli_num_rows($result) > 0) {

     // Apresenta os resultados
     while($row = mysqli_fetch_assoc($result)) {
         echo "id: " . $row["ID"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>";
     }

 } else {
     echo "0 resultados";
 }

// Fecha a ligação
mysqli_close($conn);
?>