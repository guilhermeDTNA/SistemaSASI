<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Remover Aluno - GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <script type="text/javascript" src="redireciona_https.js"></script>
    </head>

    <body>
        <?php
        session_start();
        include_once './valida_login.php';
        ?>
        <?php
        include_once './topo.php';
        ?>
        <div class="titulo_opcoes">
            <font color="black">Remove alunos
        </div>
        <form action="excluiAluno.php" method="POST">
            
            <p align="center"> Identificação (ID) do aluno: <input type="text" name="id_aluno">
            
            <input type="submit" value="Remover Aluno"></p>
        </form>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>