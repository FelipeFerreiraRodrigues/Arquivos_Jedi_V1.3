<?php include '../../login/vefuser.php';
include '../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Especies</title>
</head>
<body>
    <section>
        <?php
        //Header do site
        include '../../headerfooter/header.php'
        ?>
    </section>
    
    <div>
        <section>
            <?php
            //Barra lateral
            include 'asideesp.php'
            ?>
        </section>
    </div>

    <div>
        <section>
            <h1>Exibidor de Espécies Registradas</h1>
            <?php
            read_esp($conexao);
            ?>
        </section>
    </div>

    <div>
        <section>
            <h2>Aqui será onde ficará o READ geral da página</h2>
        </section>
    </div>

    <div>
        <section>
            <?php
            //Footer do site
            include '../../headerfooter/footer.php'
            ?>
        </section>
    </div>
</body>
</html>