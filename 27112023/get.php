<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    
    <h1>https://academicos.ipsantarem.pt/alunos_geral.FormView?P_COD=990233619</h1>

    <?php
    
    // Receber informações via GET

    if (isset($_GET["parametro1"])){
        $variavel1 = $_GET["parametro1"];
        echo "<h1>" . $variavel1 . "</h1>";
    } else {
        echo "<h1>Parametro 1 não existe</h1>";
    }

    ?>

    <a href="get.php?parametro1=Porto">Porto</a>

    <a href="get.php?parametro1=Lisboa">Lisboa</a>

    <form method="GET" action="get.php">
        
        <input type="text" name="parametro1" placeholder="Insira um valor">
        <input type="text" name="parametro2" placeholder="Insira um valor">

        <input type="submit" value="Enviar">

    </form>

</body>
</html>