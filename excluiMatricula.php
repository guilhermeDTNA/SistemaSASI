<?php
session_start();
include_once './valida_login.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once './mysql.php';

include_once './topo.php';


// Attempt insert query execution
try {
    // Create prepared statement
    $id = addslashes($_POST['id_matricula']);
    $id_curso = addslashes($_POST['id_curso']);

    $sql = "SELECT * FROM matricula WHERE id_matricula = $id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    $arrValues = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if (empty($arrValues)) {
        ?>    
        echo "<script type=text/javascript>alert('Matrícula não encontrada!');window.location='removeMatricula.php'</script>";

        <?php
    } else {

        $sql = "SELECT * FROM matricula, curso WHERE matricula.id_curso=curso.id_curso AND matricula.id_matricula=$id AND curso.id_curso=$id_curso";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        $arrValues = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if (empty($arrValues)) {
            ?>    
            echo "<script type=text/javascript>alert('Matrícula e curso não correspondem!');window.location='removeMatricula.php'</script>";

            <?php
        } else {

            $sql = "UPDATE curso, matricula SET curso.qtd_alunos = curso.qtd_alunos-1 WHERE matricula.id_matricula=$id AND matricula.id_curso=curso.id_curso; DELETE FROM matricula WHERE matricula.id_matricula = $id;";
            //$sql = "SELECT * FROM matricula m, curso c WHERE m.id_matricula = $id AND c.id_curso = $id_curso;";

            $stmt = $pdo->prepare($sql);

            $stmt->execute();

            echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='removeMatricula.php'</script>";
        }
    }
    
} catch (PDOException $e) {
    //die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    echo "<script type=text/javascript>alert('Operação NÃO realizada!');window.location='removeMatricula.php'</script>";
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>





