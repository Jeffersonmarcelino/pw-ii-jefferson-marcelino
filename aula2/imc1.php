<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício IMC</title>
</head>
<body>
    <?php
        $peso = 74;
        $altura = 1.77;
        $imc = $peso / pow($altura, 2);

        switch($imc) {
            case $imc < 18.5:
                $resultado = "abaixo da media";
                break;
            case $imc < 25:
                $resultado = "Normal";
                break;
            case $imc < 30:
                $resultado = "acima da media";
                
                break;
            default:
                $resultado = "Obsesidade Grave";
                break;
        }

        echo "<p>Peso: $peso kg</p>";
        echo "<p>Altura: $altura cm</p>";
        echo "<p>IMC: $imc</p>";

        echo "<hr>";
        
        echo "<br /><p>Classificação: $resultado</p>";
       
        
    ?>
</body>
</html>