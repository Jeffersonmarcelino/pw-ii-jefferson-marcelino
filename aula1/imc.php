
<?php
        $peso = 74;
        $altura = 1.77;
        $imc = $peso / pow($altura, 2);

        if($imc < 18.5) {
            $classificacao = "abaixo do peso";
        }
        else if($imc < 25) {
            $classificacao = "Normal";
        }
        else if($imc < 30) {
            $result = "Sobrepeso";
        }
    
        echo "<p>Peso: $peso kg</p>";
        echo "<p>Altura: $altura cm</p>";
        echo "<p>IMC: $imc</p>";

        
        echo "<hr>";
        
        echo "<br /><p>Classificação: $result</p>";
    ?>