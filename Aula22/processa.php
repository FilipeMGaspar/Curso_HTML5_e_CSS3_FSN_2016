<?php
    include_once("conecao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];

    $sql = "insert into utilizadores (nome,email,profissao) values ('$nome', '$email', '$profissao')";

    $salvar = mysqli_query($conexao, $sql);
    mysqli_close($conexao)
?>