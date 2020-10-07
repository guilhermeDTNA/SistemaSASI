<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Remover Professor - GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
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
            <font color="black">Remove professores
        </div>
        <form action="excluiProfessor.php" method="POST">
            
            <p align="center"> Identificação (ID) do professor: <input type="text" name="id_professor">
            
            <input type="submit" value="Remover Professor"></p>
        </form>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
