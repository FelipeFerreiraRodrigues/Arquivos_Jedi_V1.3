<?php include '../../../login/vefuser.php';
include '../../../login/confidencial.php';
include '../../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Siths</title>
</head>
<body>
    <section>
        <?php
        include '../../../headerfooter/header.php'
        ?>
    </section>

    <div>
        <section>
            <?php
            include 'asidesith.php'
            ?>
        </section>
    </div>

    <div>
        <section>
            <h1>Exibidor de Siths Registrados</h1>
            <?php
            read_sith($conexao);
            ?>
        </section>
    </div>

    <a href="?off_conf=1">Sair do Modo Confidencial</a>

    <div>
        <section>
            <?php
            include '../../../headerfooter/footer.php'
            ?>
        </section>
    </div>
</body>
</html>