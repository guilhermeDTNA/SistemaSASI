<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Remover Diretor - GereCurso</title>
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
            <font color="black">Remove diretores
        </div>
        <form action="excluiDiretor.php?nivel=superuserroot" method="POST">
            
            <p align="center"> Identificação (ID) do diretor: <input type="text" name="id_diretor">
            
            <input type="submit" value="Remover Diretor"></p>
        </form>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
