<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gerenciar - GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        
        <!-- Arquivos Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery.min.js" ></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        session_start();
        include_once './valida_login.php';
        ?>
        <?php
        include_once './topo.php';
        $tipo2 = addslashes($_GET['tipo']);
        $tipo = addslashes(ucfirst($_GET['tipo']));
        ?>
        <div class="principal">
            <ul>
                <li><a href="add<?php echo $tipo ?>.php">Cadastrar <?php echo $tipo ?></a></li>
                <li><a href="remove<?php echo $tipo ?>.php">Remover <?php echo $tipo ?></a></li>
                <li><a href="alterarDados.php?tipo=<?php echo $tipo2 ?>">Alterar Dados do(a) <?php echo $tipo ?></a></li>
            </ul>
            <br>
            <br>

            <!--
            <form action="pesquisar.php?msg=<?php echo $tipo2 ?>" method="POST">
                <?php
                /*
                if ($tipo2 == 'matricula') {
                    echo '<p align="center"> ID da ' . $tipo . ': <input type="text" name="nome" required="">';
                } else {
                    echo '<p align="center"> Nome do(a) ' . $tipo . ': <input type="text" name="nome" required="">';
                }
                */
                ?>

                <input type="submit" value="Procurar" name="procurar"></p>
            </form>
            -->

            <form action="pesquisar.php" method="POST">
                <?php
                
                if ($tipo2 == 'matricula') {
                    echo '<p align="center"> ID da ' . $tipo . ': <input type="text" name="nome" required="">';
                } else {
                    echo '<p align="center"> Nome do(a) ' . $tipo . ': <input type="text" name="nome" required="">';
                    ?>
                    <input type="hidden" value="<?php echo $tipo2 ?>" name="cargo">
                    <?php
                }
                
                ?>

                <input type="submit" value="procurar" name="procurar"></p>
            </form>

            <br>

<?php
if ($tipo == 'Curso') {
    echo '  <form action="listar.php?msg=Curso-Aluno" method="POST"> 
                <p align="center"> ID do Curso: <input type="number" name="id_curso" required="">
                    <input type="submit" value="Listar alunos matriculados" name="listar"></p>
            </form>  ';
}
if ($tipo == 'Matricula') {
    echo '  <ul>
                <li><a href="listar.php?msg=Professor-Aluno">Listar relações entre professores e alunos</a></li>
            </ul> ';
}
if ($tipo == 'Despesa') {
    echo '<br><br><iframe width="100%" height="490px" frameborder="0" src="listar.php?msg=Lucro"></iframe>';
}
?>
        </div>
            <?php
            include_once './rodape.php';
            ?>
    </body>
</html>