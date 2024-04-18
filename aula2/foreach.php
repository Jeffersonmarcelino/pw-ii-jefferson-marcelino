<!DOCTYPE html>
<html>
    <head>
        <title>Exercicio ForEach</title>
    </head>
    <body>
        <?php
            $pokemons = array(
                "Pikachu",
                "Bulbasauro",
                "Squirtle",
                "Charmander",
                "Eevee"
            );

            // echo $pokemons[0]."<br>";
            // echo $pokemons[1]."<br>";
            // echo $pokemons[2]."<br>";

            foreach($pokemons as $pokemon) {
                if($pokemon !== "Charmander") {
                    echo $pokemon . "<br>";
                }
                else {
                    echo "one piece melhor que todos esses <br>";
                }
            }
        ?>
    </body>
</html>