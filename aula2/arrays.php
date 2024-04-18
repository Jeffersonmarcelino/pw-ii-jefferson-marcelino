<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Arrays</title>
</head>
<body>
    <?php
        $e = array("red", "green", "blue", "white", "black");
        echo gettype($e) . "<br>";
        var_dump($e);
        echo "<br>" . $e[3];
        echo "<br>" . count($e);
        
    ?>
</body>
</html>