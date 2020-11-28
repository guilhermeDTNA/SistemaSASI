<html>
<head>
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
</head>
<body>

<?php
session_start();
include_once './valida_login.php';
include_once './mysql.php';
include_once './topo.php';

//if (isset(addslashes($_POST['procurar']))) {

$nome = addslashes($_POST['nome']);
$cargo = addslashes($_POST['cargo']);

try {
    if ($cargo == 'professor') {
        $stmt = $pdo->prepare("SELECT * FROM $cargo WHERE nome_professor LIKE '%$nome%'");
    } elseif ($cargo == 'aluno') {
        $stmt = $pdo->prepare("SELECT * FROM $cargo WHERE nome_aluno LIKE '%$nome%'");
    } elseif ($cargo == 'diretor') {
        $stmt = $pdo->prepare("SELECT * FROM $cargo WHERE nome_diretor LIKE '%$nome%'");
    } elseif ($cargo == 'curso') {
        $stmt = $pdo->prepare("SELECT * FROM $cargo WHERE nome_curso LIKE '%$nome%'");
    } elseif ($cargo == 'matricula') {
        $stmt = $pdo->prepare("SELECT * FROM $cargo WHERE id_matricula LIKE '%$nome%'");
    } elseif ($cargo == 'despesa') {
        $stmt = $pdo->prepare("SELECT * FROM $cargo WHERE nome_despesa LIKE '%$nome%'");
    }
    

    $stmt->execute();
    $arrValues = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($arrValues)) {
        ?>    
        <p align="center" style="color: red"><?php echo "Nenhum registro encontrado"; ?></p>

        <?php
    } else {
// open the table
        print "<h2><p align=center> <font color=red> Registros encontrados: </font></p></h2> ";

        if ($cargo=='matricula' || $cargo=='despesa' || $cargo=='curso'){
            print "<table class='table table-dark table-hover table-bordered '> \n";
        }
        else{
            print "<table class='table table-dark table-hover table-bordered table-responsive'> \n";
        }

        print "<tr align=center>\n";
// add the table headers
        foreach ($arrValues[0] as $key => $useless) {
            print "<th>$key</th>";
        }
        print "</tr>";
// display data
        foreach ($arrValues as $row) {
            print "<tr>";
            foreach ($row as $key => $val) {
                print "<td align=center>$val</td>";
            }
            ?>

            <?php
            print "</tr>\n";
        }
// close the table
        print "</table>\n";
    }
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
//}

include_once './rodape.php';
?>
</body>
</html>