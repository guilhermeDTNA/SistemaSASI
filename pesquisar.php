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
