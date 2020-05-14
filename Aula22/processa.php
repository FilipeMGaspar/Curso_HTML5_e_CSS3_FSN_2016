<?php
    include_once("conecao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];

    $sql = "insert into utilizadores ()"
    mysqli_close($conexao)
?>