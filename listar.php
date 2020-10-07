<html>
    <head>
        <meta charset="utf-8">
        <title>Listar - GereCurso</title>
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
        $msg = addslashes($_GET['msg']);
        //include_once './topo.php';
        include_once './mysql.php';
        try {

            if ($msg == 'Professor-Aluno') {
                $stmt = $pdo->prepare("SELECT CONCAT(p.nome_professor, ' ', p.sobrenome_professor) as 'Professor', CONCAT(a.nome_aluno, ' ', a.sobrenome_aluno) as 'Aluno' from professor p join curso c join aluno a join matricula m on p.id_professor=c.id_professor and a.id_aluno=m.id_aluno and c.id_curso=m.id_curso order by p.nome_professor;");
            } elseif ($msg == 'Curso-Aluno') {
                $id = addslashes($_POST['id_curso']);
                $stmt = $pdo->prepare("call sp_curso_aluno($id);");
            } elseif ($msg == 'Lucro') {
                $stmt = $pdo->prepare("SELECT f_calculaFinancas() as 'Lucro'");
            } else {
                $stmt = $pdo->prepare("SELECT * FROM $msg");
            }

            if ($msg != 'Lucro') {
                include_once './topo.php';
                include_once './rodape.php';
            }

            $stmt->execute();
            $arrValues = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (empty($arrValues)) {
                ?>
                <p align="center" style="color: red"><?php echo "<br>Nenhum registro encontrado"; ?></p>
                <?php
            } else {
                // open the table
                //1 letra maiuscula
                $msg1 = ucfirst($msg);
                // open the table
                print "<h2><p align=center> <font color=red> $msg1   </font></p></h2> ";
                print "<table align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>\n";
                print "<tr>\n";
                // add the table headers
                foreach ($arrValues[0] as $key => $useless) {
                    print "<th>$key</th>";
                }
                print "</tr>";
                // display data
                foreach ($arrValues as $row) {
                    print "<tr>";
                    foreach ($row as $key => $val) {
                        print "<td>$val</td>";
                    }
                    print "</tr>\n";
                }
                // close the table
                print "</table>\n";
            }
        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }

        //include_once './rodape.php';
        ?>
    </body>
