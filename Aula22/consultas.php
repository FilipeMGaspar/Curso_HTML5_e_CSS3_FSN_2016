<?php
    include_once("conecao.php");

    $sql = "select * from utilizadores";
    $consulta = mysqli_query($conexao, $sql);
    $registos = mysqli_num_rows($consulta);

    //mysqli_close($conexao);
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
            <form action="" method="get">
            Filtrar por profissão: <input type="text" name="filtro" class="campo" require autofocus>
            <input type="submit" value="Pesquisar" class="btn">
            </form>

        <?php
            print "Foram encontrados $registos registos";
            print "<br><br>";

            while($exebirRegistos = mysqli_fetch_array($consulta)){
                
                $codigo = $exebirRegistos[0];
                
                $nome = $exebirRegistos[1];
                
                $email = $exebirRegistos[2];
                
                $profissao = $exebirRegistos[3];

                print "<article class='procurou'>";

                    print "$codigo<br>";
                    print "$nome<br>";
                    print "$email<br>";
                    print "$profissao";
                     
                print "</article>";
            }
            mysqli_close($conexao);
        ?>

    </section>
 </div>
    
</body>
</html>