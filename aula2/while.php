<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Exercicio While</title>
    </head>
    <body>
        <?php
            // while sem break
            $i = 1;
            while($i < 10) {
                echo $i."<br>";
                $i++;
            }

            echo "<br>";

            // while com break
            $i = 1;
            while($i < 6) {
                if($i == 5) break;
                echo $i . "<br>";
                $i++;
            }
        ?>
    </body>
</html>