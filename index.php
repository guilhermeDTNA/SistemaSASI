<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <!-- Arquivos Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery.min.js" ></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="redireciona_http.js"></script>


    
    <style>
        * {
            margin: 0;
            padding:0;
        }

        /* para garantir que estes elementos ocuparão toda a tela */
        body, html {
            width: 100%;
            height: 100%;
            font-family: Arial, Tahoma, sans-serif;
        }

        body {   
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #site {
            width: 560px;
            padding: 20px;
            margin: 40px auto;
            background: #FFF; /* fundo branco para navegadores que não suportam rgba */
            background: rgba(255,255,255,0.8); /* fundo branco com um pouco de transparência */
        }

        p {
            margin-bottom: 1.5em;
        }</style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script>
        </script>
    </style>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Página Inicial - TeamStudy</title>
</head>
<body>
    <?php
    session_start();
    include_once './valida_login.php';
    ?>
    <?php
    include_once './topo.php';
    ?>

    <div class="geral">
        <div class="content">
            <h3><font color="blue">Bem-Vindo ao TeamStudy!</font></h3>
        </div>
    </div>

    <?php
    include_once './rodape.php';
    ?>

</body>
</html>
