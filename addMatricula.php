<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Matrícula - TeamStudy</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        
        <!-- Arquivos Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery.min.js" ></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="redireciona_https.js"></script>
    </head>
    <!---->

    <body>
        <?php
        error_reporting(0);
        session_start();
        include_once './valida_login.php';
        ?>
        <?php
        include_once './topo.php';
        ?>
        <div class="titulo_opcoes">
            <font color="black">Cadastra Matriculas
        </div>
        <form action="cadastraMatricula.php" method="POST">
            <table bgcolor="darksalmon" align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5> 
            <tr>
                <td>
                ID do Aluno: <input type="number" placeholder="ID do Aluno" name="id_aluno">
            </td>
            <br>

            <td>
                ID do Curso: <input type="number" placeholder="ID do Curso" name="id_curso">
            </td>
            
            <br>

           
            </table><br><br>
             <center><input type="submit" value="Registrar Matricula"></center>
        </tr>
        </form>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>


