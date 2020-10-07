<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <title>Login - GereCurso</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
    <!-- Arquivos Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery.min.js" ></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<body>
	<?php
	if(isset($_SESSION['nao_autenticado'])):
	?>
	<div class="loginp">
	<p>Usuario ou senha inválidos!</p>
	</div>
	<?php
		endif;
		unset($_SESSION['nao_autenticado']);
	?>
		<div class="login">
		    <form action="login.php" method="POST">

		    	<div class="imgcontainer">
	    			<img src="avatar.png" alt="Avatar" class="avatar">
				</div>

				<div class="container">
					<label for="usuario"><b>Usuário</b></label>
			        <input name="usuario" type="text" placeholder="Seu usuário" required><br>
			        
			        <label for="senha"><b>Senha</b></label>
			        <input name="senha" type="password" placeholder="Sua senha" required><br>
			        
			        <button type="submit">Login</button>
			        <a href="https://www.guilhermerocha.tk"><button type="button" class="btn-danger">Retornar ao portfolio</button></a>
		        </div>
		    </form>
	    </div>
</body>

</html>