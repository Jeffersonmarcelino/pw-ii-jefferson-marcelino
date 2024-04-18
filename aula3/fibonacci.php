<?php
    // Execução com while
    $fibonacci = array(0, 1);
    $iterador = 0;

    while($iterador < 10) {
        echo $fibonacci[$iterador] . "<br>";
        $fibonacci[] = $fibonacci[$iterador] + $fibonacci[$iterador + 1];
        $iterador++;
    }

    echo "<br>";

    // Execução com for
    $fibonacci = array(0, 1);

    for($iterador = 0; $iterador < 10; $iterador++) {
        echo $fibonacci[$iterador] . "<br>";
        $fibonacci[] = $fibonacci[$iterador] + $fibonacci[$iterador + 1];
    }
?>