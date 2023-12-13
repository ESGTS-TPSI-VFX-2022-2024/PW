<?php 
include_once 'includes/session.php';

// Verificar se o utilizador está autenticado
if (!isset($_SESSION["username"])){
    header("location: login.php");
}
?>