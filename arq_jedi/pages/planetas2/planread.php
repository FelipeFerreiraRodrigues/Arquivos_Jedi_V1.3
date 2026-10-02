<?php include '../../login/vefuser.php';
include '../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Planetas</title>
</head>
<body>
    <section>
        <?php include '../../headerfooter/header.php'?>
    </section>

    <div>
        <section>
            <?php
            //Barra lateral
            include 'asideplan.php'
            ?>
        </section>
    </div>

    <div>
        <section>
            <h1>Exibidor de Planetas Registrados</h1>
            <?php
            read_plan($conexao);
            ?>
        </section>
    </div>

    <div>
        <section>
            <?php include '../../headerfooter/footer.php'?>
        </section>
    </div>
</body>
</html>