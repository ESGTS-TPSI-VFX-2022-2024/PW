<?php 

$titulo = "Index";
$pessoas = ['João', 'Maria', 'José'];

var_dump($_POST);

// Verifica se o formulário foi enviado
if (isset($_POST['Enviar'])) {
    
    // Verifica se o campo nome foi preenchido
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        array_push($pessoas, $_POST['nome']);
    }
    
}

function getTitulo(){
    if (isset($_GET['titulo']) && !empty($_GET['titulo'])) {
        return "<h1>" . $_GET['titulo'] . "</h1>";
    }
}

function getPessoas($pessoas2){
    $html = '';

    foreach ($pessoas2 as $pessoa) {
        $html .= "<tr><td>$pessoa</td></tr>";
    }
    
    return $html;
}

?>