<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php 
        // Escrevendo na tela
        echo "<h1>Hello World!</h1>";

        // Variáveis
        $color = "red";
        $Color = "blue";

        $altura = 20;
        $largura = 10.5;

        // Concatenação
        echo "My car is " . $color . "<br>";
        echo "My house is " . $Color . "<br>";

        if ($altura > $largura) {
            echo "<h1>A altura é maior que a largura</h1>";
        } else {
            echo "<p>A largura é maior que a altura</p>";
        }
        
    ?>
    
</body>
</html>