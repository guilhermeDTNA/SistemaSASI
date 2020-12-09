<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Curso - GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        
        <!-- Arquivos Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery.min.js" ></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
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
            <font color="black">Cadastra Cursos
        </div>
                    <form action="cadastraCurso.php" method="POST">
                        <table bgcolor="darksalmon" align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5> 
                        <tr>
                            <td>
                        
                            ID do Professor Responsável: <input type="number" placeholder="Professor Responsável" name="id_professor">
                        </td><br>

                        <td>
                            Nome Curso: <input type="text" placeholder="Nome Curso" name="nome_curso">
                        </td>
                    </tr>
                    <tr>
			             <td>
                            Valor da Mensalidade: <input type="number" placeholder="Mensalidade:" name="mensalidade">
                        </td><br>

                        <td>
                            Quantidade Inicial de alunos: <input type="number" placeholder="Quantidade de alunos:" name="qtd_alunos">
                        </td><br>
                    </tr>
                </table><br><br>
                        <center><input type="submit" value="Registrar Curso"></center>
                        </div>
                    </form>
            <?php
            include_once './rodape.php';
            ?>
    </body>
</html>
