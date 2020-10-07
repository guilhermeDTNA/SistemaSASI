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
    $sql = "INSERT INTO despesa(id_diretor, nome_despesa, valor_despesa) VALUES (:id_diretor, :nome_despesa, :valor_despesa)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters to statement
    $stmt->bindParam(':id_diretor', addslashes($_REQUEST['id_diretor']));
    $stmt->bindParam(':nome_despesa', addslashes($_REQUEST['nome_despesa']));
    $stmt->bindParam(':valor_despesa', addslashes($_REQUEST['valor_despesa']));
    // Execute the prepared statement
    $stmt->execute();

    echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='addDespesa.php'</script>";
} catch (PDOException $e) {
    //die("ERROR: Could not able to execute $sql. " . $e->getMessage());

    echo "<script type=text/javascript>alert('Operação NÃO realizada!');window.location='addDespesa.php'</script>";
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>

