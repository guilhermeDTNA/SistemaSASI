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
    $sql = "INSERT INTO curso(id_professor, nome_curso, mensalidade, qtd_alunos) VALUES (:id_professor, :nome_curso, :mensalidade , '0')";
    $stmt = $pdo->prepare($sql);

    // Bind parameters to statement
    $stmt->bindParam(':id_professor', addslashes($_REQUEST['id_professor']));
    $stmt->bindParam(':nome_curso', addslashes($_REQUEST['nome_curso']));
    $stmt->bindParam(':mensalidade', addslashes($_REQUEST['mensalidade']));
    //$stmt->bindParam(':qtd_alunos', '0');
    // Execute the prepared statement
    $stmt->execute();

    echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='addCurso.php'</script>";
} catch (PDOException $e) {
    //die("ERROR: Could not able to execute $sql. " . $e->getMessage());

    echo "<script type=text/javascript>alert('Operação NÃO realizada!');window.location='addCurso.php'</script>";
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>
