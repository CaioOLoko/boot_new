<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
        <?php 
            // $_SERVER['PHP_SELF'] retorna o caminho do arquivo em que você está
            if($_SERVER['PHP_SELF']!='/boot_new/index.php/cliente/cadastro/'){
                require('cabecalho.php');//muda o nome do arquivo se quiser
            }else{
                require('cabecalho_alt.php');//muda o nome do arquivo se quiser
            }
        ?>
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>
        <?php
            if($_SERVER['PHP_SELF']!='/boot_new/index.php/cliente/cadastro/'){
                require('rodape.php');//muda o nome do arquivo se quiser
            }
        ?>
    </body>
</html>
