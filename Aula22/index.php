<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de registo</title>
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
        <h1>Registo de Utilizadores</h1>
        <hr><br><br>

        <form action="processa.php" method="post">
            <input type="submit" value="Guardar" class="btn">
            <input type="reset" value="Limpar" class="btn">
            <br><br>

            Nome: <br>
            <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
            
            E-Mail: <br>
            <input type="email" name="email" class="campo" maxlength="50" required><br>

            Profissão: <br>
            <input type="text" class="campo" name="profissao" required>

        </form>

    </section>
 </div>
    
</body>
</html>