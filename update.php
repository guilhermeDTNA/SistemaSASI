<?php
session_start();
include_once './valida_login.php';
?>
<html>
    <head>
        <!-- Arquivos Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery.min.js" ></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="redireciona_https.js"></script>
    <meta charset="utf-8">
    </head>
    <body>
        
    
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */


include_once './topo.php';
$tipo = addslashes($_POST['tipo']);
$id = addslashes($_POST['id_a']);
include_once './mysql.php';

//
if ($tipo == 'aluno') {
    $sql = "call sp_dadosAluno($id);";
    $query = $pdo->query($sql);
} else if ($tipo == 'professor') {
    $sql = "call sp_dadosProfessor($id);";
    $query = $pdo->query($sql);
} else if ($tipo == 'diretor') {
    $sql = "call sp_dadosDiretor($id);";
    $query = $pdo->query($sql);
} else if ($tipo == 'curso') {
    $sql = "call sp_dadosCurso($id);";
    $query = $pdo->query($sql);
} else if ($tipo == 'matricula') {
    $sql = "call sp_dadosMatricula($id);";
    $query = $pdo->query($sql);
} else if ($tipo == 'despesa') {
    $sql = "call sp_dadosDespesa($id);";
    $query = $pdo->query($sql);
}
// O segredo esta nesta linha abaixo \/
$return = $query->fetch();
unset($pdo);
?>

<form action="update2.php?nivel=user" method="POST">

<?php
if ($tipo == 'curso') {
    ?>

        <table bgcolor="darksalmon" align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>

            <tr>
                <td>
                    ID professor: <input type="number" name="id_professor" value="<?php echo $return['id_professor'] ?>" required>
                </td>
                <td>
                    Nome curso: <input type="text"  name="nome" value="<?php echo $return['nome_' . $tipo] ?>" required>
                </td>
            <input type="hidden" name="id_registro" value="<?php echo $id ?>">

            </tr>

            <tr align="center">
                <td colspan="2">
                    Valor da Mensalidade: <input type="number" name="mensalidade" value="<?php echo $return['mensalidade'] ?>" required>
                </td>
            </tr>

        </table>
        <br>


    <?php
} elseif ($tipo == 'despesa') {
    ?>    
        <table bgcolor="darksalmon" align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>

            <tr>
                <td>
                    ID diretor: <input type="number" name="id_diretor" value="<?php echo $return['id_diretor'] ?>" required>
                </td>
                <td>
                    Nome da despesa: <input type="text"  name="nome" value="<?php echo $return['nome_' . $tipo] ?>" required>
                </td>

                <td>
                    Valor da despesa: <input type="number" name="valor_despesa"  value="<?php echo $return['valor_despesa'] ?>" required>
                </td>
            <input type="hidden" name="id_registro" value="<?php echo $id ?>">
            </tr>

        </table>
    <?php
} elseif ($tipo == 'matricula') {
    ?>
        <table bgcolor="darksalmon" align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>

            <tr>
                <td>
                    ID curso: <input type="number" name="id_curso" value="<?php echo $return['id_curso'] ?>" required>
                </td>
                <td>
                    ID aluno: <input type="text"  name="id_aluno" value="<?php echo $return['id_aluno'] ?>" required>
                </td>
            <input type="hidden" name="id_registro" value="<?php echo $id ?>">
            </tr>

        </table


        <?php
} elseif ($tipo == 'diretor') {
    ?>
        
        <table bgcolor="darksalmon" align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>

                <tr>
                    <td>
                        Nome: <input type="text" placeholder="Nome" name="nome_diretor" value="<?php echo $return['nome_' . $tipo] ?>" required>
                    </td>
                    <td>
                        Sobrenome: <input type="text" placeholder="Sobrenome" name="sobrenome_diretor" value="<?php echo $return['sobrenome_' . $tipo] ?>" required>
                    </td>
                    <td>
                        E-mail: <input type="email" placeholder="E-mail" name="email_diretor" value="<?php echo $return['email_' . $tipo] ?>" required>
                    </td>
                    <td>
                        Data de nascimento: <input type="date" placeholder="Data" name="data_nasc" value="<?php echo $return['data_nasc'] ?>" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        Rua: <input type="text" placeholder="Rua" name="rua_diretor" value="<?php echo $return['rua_' . $tipo] ?>" required>
                    </td>
                    <td>
                        Número: <input type="number" placeholder="Numero" name="numero" value="<?php echo $return['numero'] ?>" required>
                    </td>
                    <td>
                        Cidade: <input type="text" placeholder="Cidade" name="cidade_diretor" value="<?php echo $return['cidade_' . $tipo] ?>" required>
                    </td>
        
                    <td>
                        Estado: <select name="estado_diretor" placeholder="Estado" required>
                            <option selected disabled="disabled">Estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>

                    <td>
                        Senha: <input type="password" placeholder="Senha" name="senha" value="<?php echo $return['senha'] ?>" required>
                    </td>
                    <td>
                        Usuário: <input type="text" placeholder="Usuário" name="usuario" value="<?php echo $return['usuario'] ?>" required>
                    </td>
                    
                    <td></td>
                    
                    <input type="hidden" name="id_registro" value="<?php echo $id ?>">
                </tr>

            </table>
        
    <?php
} else {
    //echo $id;
    //echo 'id_' . $tipo;
    ?>


        <table bgcolor="darksalmon" align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>

            <tr>
                <td>
                    Nome: <input type="text"  name="nome" value="<?php echo $return['nome_' . $tipo] ?>" required>
                </td>
                <td>
                    Sobrenome: <input type="text"  name="sobrenome" value="<?php echo $return['sobrenome_' . $tipo] ?>"required>
                </td>
                <td>
                    E-mail: <input type="email" name="email" value="<?php echo $return['email_' . $tipo] ?>" required>
                </td>
            </tr>

            <tr>
                <td>
                    Data de nascimento: <input type="date" name="data_nasc" value="<?php echo $return['data_nasc'] ?>" required>
                </td>
                <td>
                    Rua: <input type="text" name="rua" value="<?php echo $return['rua_' . $tipo] ?>" required>
                </td>
                <td>
                    Número: <input type="number" name="numero" value="<?php echo $return['numero'] ?>" required>
                </td>
            </tr>

            <tr>
                <td>
                    Cidade: <input type="text" name="cidade" value="<?php echo $return['cidade_' . $tipo] ?>" required>
                </td>
    <?php if ($tipo == 'professor') {
        ?> 
                    "<td>
                        Salário: <input type="text" name="salario" value="<?php echo $return['salario'] ?>" required>
                    </td>";

    <?php } ?>
                <td>
                    Estado: <select name="estado" placeholder="Estado" required="true">
                        <option></option>
                        <option  disabled="disabled">Estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>

                </td>

            <input type="hidden" name="id_registro" value="<?php echo $id ?>">

            </tr>

        </table>
<?php }
?>



    <br>
    <input type="hidden" name="oTipo" value="<?php echo $tipo ?>"> 
    <p align="center"><input type="submit" value="Atualizar" name="atualizar"></p>
</form> 

</body>
</html>

<?php
include_once './rodape.php';
?>
