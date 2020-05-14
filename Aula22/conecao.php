<?php

    /*Conecção ao servidor de base de dados*/
    $hostname = "localhost ";
    $user= "root";
    $password = "";
    $database = "registo";
    $conexao = mysqli($hostname, $user, $password, $database);

    if(!$conexaocone){
        print "Flha na conecção com a Base de dados";
    }
?>