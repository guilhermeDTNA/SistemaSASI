<?php

session_start();
include_once './valida_login.php';
?>
<?php

include_once("mysql.php");

if(addslashes($_POST['oTipo']) == 'curso'){
$id_registro = addslashes($_POST['id_registro']);
$id_professor = addslashes($_POST['id_professor']);
$nome = addslashes($_POST['nome']);
$num_alunos = addslashes($_POST['num_alunos']);
$mensalidade = addslashes($_POST['mensalidade']);

try {
$msql = "UPDATE curso SET id_professor = '$id_professor', nome_curso = '$nome', mensalidade = '$mensalidade' WHERE id_curso = $id_registro";
$stmt = $pdo->prepare($msql);

$stmt->bindParam($id_professor, addslashes($_REQUEST['id_professor']));
$stmt->bindParam($nome, addslashes($_REQUEST['nome_curso']));
$stmt->execute();

    echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='alterarDados.php?tipo=curso'</script>";
} catch (Exception $e) {
    echo "<script type=text/javascript>alert('Operação NÃO realizada!');window.location='alterarDados.php?tipo=curso'</script>";

}

}elseif (($_POST['oTipo'] == 'despesa')) {

$id_registro = addslashes($_POST['id_registro']);
$id_diretor = addslashes($_POST['id_diretor']);
$nome = addslashes($_POST['nome']);
$valor_despesa = addslashes($_POST['valor_despesa']);


try {
$msql = "UPDATE despesa SET id_diretor = '$id_diretor', nome_despesa = '$nome', valor_despesa = '$valor_despesa' WHERE id_despesa = $id_registro";
$stmt = $pdo->prepare($msql);

$stmt->bindParam($id_diretor, addslashes($_REQUEST['id_diretor']));
$stmt->bindParam($nome, addslashes($_REQUEST['nome_despesa']));
$stmt->bindParam($valor_despesa, addslashes($_REQUEST['valor_despesa']));
$stmt->execute();


    echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='alterarDados.php?tipo=despesa'</script>";
} catch (Exception $e) {
    echo "<script type=text/javascript>alert('Operação NÃO realizada!');window.location='alterarDados.php?tipo=despesa'</script>";

}


}elseif(($_POST['oTipo'] == 'matricula')) {

$id_registro = addslashes($_POST['id_registro']);
$id_aluno = addslashes($_POST['id_aluno']);
$id_curso = addslashes($_POST['id_curso']);



try {
$msql = "UPDATE `matricula` SET `id_aluno` = '$id_aluno', id_curso = '$id_curso' WHERE `id_matricula` = $id_registro";
$stmt = $pdo->prepare($msql);

$stmt->bindParam($id_aluno, addslashes($_REQUEST['id_aluno']));
$stmt->bindParam($id_curso, addslashes($_REQUEST['id_curso']));
$stmt->execute();

    echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='alterarDados.php?tipo=matricula'</script>";
} catch (Exception $e) {
    echo "<script type=text/javascript>alert('Operação NÃO realizada!');window.location='alterarDados.php?tipo=matricula'</script>";
}


} elseif((addslashes($_POST['oTipo']) == 'diretor')){

    //Código para restrição para alterar diretores
	/*
    if ($_POST['nivel']!="superuserroot"){
        echo "<script type=text/javascript>alert('Você não tem permissão para realizar essa operação!');window.location='index.php'</script>";
        exit();
    }
    */

$id_registro = addslashes($_POST['id_registro']);
$nome = addslashes($_POST['nome_diretor']);
$sobrenome = addslashes($_POST['sobrenome_diretor']);
$email = addslashes($_POST['email_diretor']);
$data_nasc = addslashes($_POST['data_nasc']);
$rua = addslashes($_POST['rua_diretor']);
$numero = addslashes($_POST['numero']);
$cidade = addslashes($_POST['cidade_diretor']);
$estado = addslashes($_POST['estado_diretor']);
//$senha = addslashes($_POST['senha']);
$usuario = addslashes($_POST['usuario']);
}

else{
$id_registro = addslashes($_POST['id_registro']);
$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$email = addslashes($_POST['email']);
$data_nasc = addslashes($_POST['data_nasc']);
$rua = addslashes($_POST['rua']);
$numero = addslashes($_POST['numero']);
$cidade = addslashes($_POST['cidade']);
$estado = addslashes($_POST['estado']);
//
}
try {

// Create prepared statement
    
if((addslashes($_POST['oTipo']) == 'aluno')){
$msql = "UPDATE aluno SET nome_aluno = '$nome', sobrenome_aluno = '$sobrenome', email_aluno = '$email', data_nasc = '$data_nasc', rua_aluno = '$rua', numero = '$numero', cidade_aluno = '$cidade', estado_aluno = '$estado' WHERE id_aluno = '$id_registro'";

$stmt = $pdo->prepare($msql);

$stmt->bindParam($nome, (addslashes($_REQUEST['nome_aluno'])));
$stmt->bindParam($sobrenome, (addslashes($_REQUEST['sobrenome_aluno'])));
$stmt->bindParam($email, (addslashes($_REQUEST['email_aluno'])));
// $stmt->bindParam($data_nasc, (addslashes($_REQUEST['data_nasc']));
$stmt->bindParam($rua, (addslashes($_REQUEST['rua_aluno'])));
$stmt->bindParam($numero, (addslashes($_REQUEST['numero'])));
$stmt->bindParam($cidade, (addslashes($_REQUEST['cidade_aluno'])));
$stmt->bindParam($estado, (addslashes($_REQUEST['estado_aluno'])));
$stmt->execute();

}elseif (addslashes($_POST['oTipo']) == 'professor') {
$msql = "UPDATE professor SET nome_professor = '$nome', sobrenome_professor = '$sobrenome', email_professor = '$email', data_nasc = '$data_nasc', rua_professor = '$rua', numero = '$numero', cidade_professor = '$cidade', estado_professor = '$estado' WHERE id_professor = '$id_registro'";

$stmt = $pdo->prepare($msql);

$stmt->bindParam($nome, addslashes($_REQUEST['nome_professor']));
$stmt->bindParam($sobrenome, addslashes($_REQUEST['sobrenome_professor']));
$stmt->bindParam($email, addslashes($_REQUEST['email_professor']));
// $stmt->bindParam($data_nasc, addslashes($_REQUEST['data_nasc']));
$stmt->bindParam($rua, addslashes($_REQUEST['rua_professor']));
$stmt->bindParam($numero, addslashes($_REQUEST['numero']));
$stmt->bindParam($cidade, addslashes($_REQUEST['cidade_professor']));
$stmt->bindParam($estado, addslashes($_REQUEST['estado_professor']));
}else{

    $prefixo = "ABCDE";
    $senha_final = $prefixo.''.$_POST['senha'];

    $hash = md5($senha_final);

$msql = "UPDATE diretor SET nome_diretor = '$nome', sobrenome_diretor = '$sobrenome', email_diretor = '$email', data_nasc = '$data_nasc', rua_diretor = '$rua', numero = '$numero', cidade_diretor = '$cidade', estado_diretor = '$estado', senha = '$hash', usuario = '$usuario' WHERE id_diretor = '$id_registro'";

$stmt = $pdo->prepare($msql);

$stmt->bindParam($nome, addslashes($_REQUEST['nome_diretor']));
$stmt->bindParam($sobrenome, addslashes($_REQUEST['sobrenome_diretor']));
$stmt->bindParam($email, addslashes($_REQUEST['email_diretor']));
$stmt->bindParam(':data_nasc', addslashes($_REQUEST['data_nasc']));
$stmt->bindParam($rua, addslashes($_REQUEST['rua_diretor']));
$stmt->bindParam($numero, addslashes($_REQUEST['numero']));
$stmt->bindParam($cidade, addslashes($_REQUEST['cidade_diretor']));
$stmt->bindParam($estado, addslashes($_REQUEST['estado_diretor']));
$stmt->bindParam(':senha', addslashes($hash));
$stmt->bindParam($usuario, addslashes($_REQUEST['usuario']));
}


// Execute the prepared statement
$stmt->execute();
    echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='alterarDados.php?tipo=$_POST[oTipo]'</script>";
} catch (PDOException $e) {
    echo "<script type=text/javascript>alert('Operação NÃO realizada!');window.location='alterarDados.php?tipo='tipo=$_POST[oTipo]'</script>";
}


// Close connection
unset($pdo);
?>