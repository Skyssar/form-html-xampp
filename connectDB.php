<?php


    $conexion = mysqli_connect(
        "localhost", 
        "root",
        "",
        // "covid_sena"
    );

    mysqli_select_db($conexion, "covid_sena") or die("Conection Lost: ".mysqli_error($conexion));

?>