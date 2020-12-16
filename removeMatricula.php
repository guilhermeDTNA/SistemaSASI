<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Remover Matrícula - TeamStudy</title>
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
            <font color="black">Remove Matrículas
        </div>
        <form action="excluiMatricula.php" method="POST">

            <p align="center"> Identificação (ID) da Matricula: <input type="text" name="id_matricula"> <br>
            <p align="center"> Identificação (ID) do Curso: <input type="text" name="id_curso"> <br><br>

                <input type="submit" value="Remover Matricula"></p>
        </form>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>




