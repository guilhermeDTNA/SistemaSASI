<html>
    <head>
  <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="estilo.css">
   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   
    <title></title>
    
    <!-- Arquivos Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery.min.js" ></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136244150-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-136244150-1');
        </script>
    
    
    </head>
    <body>
       <div id='cssmenu'>
        <ul>
           <li class='active'><a href="index.php"><span>Home</span></a></li>
           <li class='has-sub'><a href='#'><span>Listagens</span></a>
              <ul>
                  <li><a href="listar.php?msg=aluno" target="_blank">LISTAR ALUNOS</a></li>
                <li><a href="listar.php?msg=professor" target="_blank">LISTAR PROFESSORES</a></li>
                <li><a href="listar.php?msg=curso" target="_blank">LISTAR CURSOS</a></li>
                <li><a href="listar.php?msg=despesa" target="_blank">LISTAR DESPESAS</a></li>
                <li><a href="listar.php?msg=matricula" target="_blank">LISTAR MATRÍCULAS</a></li>
                <li><a href="listar.php?msg=diretor" target="_blank">LISTAR DIRETORES</a></li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Gestão de pessoas</span></a>
              <ul>
                <li><a href="gerenciar.php?tipo=aluno">Gerenciar alunos</a></li>
                <li><a href="gerenciar.php?tipo=professor" >Gerenciar Professores</a></li>
                <li><a href="gerenciar.php?tipo=diretor" >Gerenciar diretores</a></li>
              </ul>
           </li>
          <li class='has-sub'><a href='#'><span>Gestão de curso</span></a>
              <ul>
                <li><a href="gerenciar.php?tipo=curso">Curso</a></li>
                <li><a href="gerenciar.php?tipo=matricula">Gerenciar matricula</a></li>
              </ul>
           </li>  
           <li class='active'><a href="gerenciar.php?tipo=despesa"><span>Gestão de despesas</span></a></li>    
           <li class='active'><a href="https://www.guilhermerocha.tk"><span>Retornar ao portfolio</span></a></li> 
           <div class="logout">
              <a href="logout.php">Sair</a>
           </div> 
        </ul>
      </div>

</body>
</html>
