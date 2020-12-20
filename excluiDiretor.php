<?php
session_start();
include_once './valida_login.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once './mysql.php';

include_once './topo.php';


// Attempt insert query execution
try {

    if ($_POST['nivel']=="superuserroot"){
        echo "<script type=text/javascript>alert('Você não tem permissão para realizar essa operação!');window.location='removeDiretor.php'</script>";
        exit();
    }
    else{

    // Create prepared statement
        $id = addslashes($_POST['id_diretor']);

        $sql = "SELECT * FROM diretor WHERE id_diretor = $id";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        $arrValues = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //Se o array estiver vazio significa que o diretor não existe
        if (empty($arrValues)) {
            ?>    
            echo "<script type=text/javascript>alert('Diretor não encontrado!');window.location='removeDiretor.php'</script>";

            <?php
        } else {

            $usuario_logado = $_SESSION['usuario'];

            //Verifica se o diretor em questão é o que está logado 
            $sql = "SELECT * FROM diretor WHERE id_diretor = $id AND usuario = '$usuario_logado'";

            $stmt = $pdo->prepare($sql);

            $stmt->execute();

            $arrValues = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //Se não estiver vazio é que é o diretor que está logado
            if (!empty($arrValues)) {
                echo "<script type=text/javascript>alert('Você não pode remover seu usuário se estiver logado! Faça o login com outra conta para isso');window.location='logout.php?'</script>";
            } 
            else{
                $sql = "DELETE FROM diretor WHERE id_diretor = $id";

                $stmt = $pdo->prepare($sql);

                $stmt->execute();

                echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='removeDiretor.php'</script>";
            }
        }
    }
} catch (PDOException $e) {
    //die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    //echo $e;

    //Se tiver a palavra 'despesa' no erro
    if (strpos( $e, 'despesa')) {
        echo "<script type=text/javascript>alert('Operação NÃO realizada: há ao menos uma despesa associada a esse diretor');window.location='removeDiretor.php' </script>";
    }
    else{
        echo "<script type=text/javascript>alert('Operação NÃO realizada');window.location='removeDiretor.php'</script>";
    }
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>

