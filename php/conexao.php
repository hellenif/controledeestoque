<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "mercadinho";

    $con = mysqli_connect($host, $usuario, $senha, $bd);

    if (!$con) {
        die("problemas na conexão: ".$mysqli->connect_error());
    } else {
        echo "sucesso na conexão";
    }
?>