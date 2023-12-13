<?php 

include_once 'includes/session.php';
$msg = "";

// Submeti o formulário
if (isset($_POST["btnEnviar"])){

    // Ler daddos do formulário
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];

    // Verificar se os campos estão preenchidos
    if (empty($username) || empty($password)){
        $msg = "Preencha todos os campos!";
    } else {
        
        // Verificar se as credenciais estão corretas
        if ($username == "admin" && $password == "123"){

            // Guardar o username na sessão
            $_SESSION["username"] = $username;

            $msg = "Login efetuado com sucesso!";

        } else {
            $msg = "Credenciais inválidas!";
        }

    }

}

?>