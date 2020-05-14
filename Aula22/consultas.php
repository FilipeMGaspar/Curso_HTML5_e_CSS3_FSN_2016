<?php
    include_once("conecao.php");

    $sql = "select * from utilizadores";
    $consulta = msqli_query($conexao, $sql);
    $registos = msquli_num_rows($consulta);

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
        <h1>Consultas</h1>
        <hr><br><br>

        <?php
         print "$registos registos encontrados";
        ?>

    </section>
 </div>
    
</body>
</html>