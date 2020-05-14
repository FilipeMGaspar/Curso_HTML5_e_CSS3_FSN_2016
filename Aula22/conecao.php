<?php

    /*Conecção ao servidor de base de dados*/
    $hostname = "localhost";
    $user= "root";
    $password = "";
    $database = "registo";
    $conexao = mysqli_connect($hostname, $user, $password, $database);

    if(!$conexao){
        print "Flha na conecção com a Base de dados";
    }
?>