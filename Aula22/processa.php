<?php
    include_once("conecao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];

    $sql = "insert into utilizadores (nome,email,profissao) values ('$nome', '$email', '$profissao')";

    $salvar = mysqli_query($conexao, $sql);
    
    $linhas = mysqli_affected_rows($conexao);

    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de registo!</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
 <div class="container">
    
    <nav>
        <ul class="menu">
            <a href="index.php"><li>Registo</li></a>
            <a href="consultas.php"><li>Consultas</li></a>
        </ul>
    </nav>
    
    <section>
        <h1>Confirmação de Registo</h1>
        <hr><br><br>

            <?php
                if($linhas == 1){
                    print "Registo efectuado com sucesso";
                }else{
                    print "Registo NÂO efectuado. <br> Ja existe um utilizador com este E-Mail";
                }
            ?>

    </section>
 </div>
    
</body>
</html>