<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once './mysql.php';

include_once './topo.php';


// Attempt insert query execution
try {
    // Create prepared statement
    if($_POST['senha']=='' || $_POST['usuario']==''){
        echo "<script type=text/javascript>alert('Operação NÃO realizada! Usuário ou senha inválidos');window.location='addDiretor.php'</script>";
    }

    if($_POST['estado_diretor']==''){
        echo "<script type=text/javascript>alert('Operação NÃO realizada! Estado inválido');window.location='addDiretor.php'</script>";
    }


    $prefixo = "ABCDE";
    $senha_final = $prefixo.''.$_POST['senha'];

    $hash = md5($senha_final);
    
    $sql = "INSERT INTO diretor (nome_diretor,sobrenome_diretor,email_diretor, data_nasc, rua_diretor, numero, cidade_diretor, estado_diretor, senha, usuario) VALUES (:nome_diretor,:sobrenome_diretor,:email_diretor, :data_nasc, :rua_diretor, :numero, :cidade_diretor, :estado_diretor, :senha, :usuario)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters to statement
    
    $stmt->bindParam(':nome_diretor', addslashes($_REQUEST['nome_diretor']));
    $stmt->bindParam(':sobrenome_diretor', addslashes($_REQUEST['sobrenome_diretor']));
    $stmt->bindParam(':email_diretor', addslashes($_REQUEST['email_diretor']));
    $stmt->bindParam(':data_nasc', addslashes($_REQUEST['data_nasc']));
    $stmt->bindParam(':rua_diretor', addslashes($_REQUEST['rua_diretor']));
    $stmt->bindParam(':numero', addslashes($_REQUEST['numero']));
    $stmt->bindParam(':cidade_diretor', addslashes($_REQUEST['cidade_diretor']));
    $stmt->bindParam(':estado_diretor', addslashes($_REQUEST['estado_diretor']));
    $stmt->bindParam(':senha', addslashes($hash));
    $stmt->bindParam(':usuario', addslashes($_REQUEST['usuario']));
    // Execute the prepared statement
    $stmt->execute();

    echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='addDiretor.php'</script>";
} catch (PDOException $e) {
    //die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    echo $e;
    echo "<script type=text/javascript>alert('Operação NÃO realizada!'".$e.");window.location='addDiretor.php'</script>";
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>
