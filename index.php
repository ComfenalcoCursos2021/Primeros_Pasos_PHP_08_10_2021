<?php
    // header("Content-Type: application/json");

    // $suma = (null);
    // var_dump($suma);
    // echo "\n<br>\n";

    $nombre = (string) "Miguel Angel Castro Escamilla";
    echo $nombre;
    echo "\n<br>\n";

    $edad = (integer) 23;
    echo $edad;
    echo "\n<br>\n";

    $altura = (float) 1.63; 
    echo $altura;
    echo "\n<br>\n";

    $soy_profesor = (bool) true;
    var_dump($soy_profesor);
    echo "<br>\n";

    $dirrecion = (array) [
        (string) "Calle",
        (integer) 11,
        "Ciudad" => (string) "Bucaramanga",
        (bool) true
    ];
    print_r($dirrecion);
    echo "\n<br>\n";
    $nacionalidad = (object) [
        "Pais" => "Colombia",
        "Departamento" => "Santander"
    ];
    print_r($nacionalidad);
    echo "\n<br>\n";

    $git = (string) "https://github.com/ComfenalcoCursos2021?tab=repositories";
    print_r($git);

?>

