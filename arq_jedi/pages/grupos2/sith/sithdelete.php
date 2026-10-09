<?php include '../../../login/vefuser.php';
include '../../../login/confidencial.php';
include '../../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Siths</title>
</head>
<body>
    <section>
        <?php include '../../../headerfooter/header.php'?>
    </section>

    <div>
        <section>
            <?php
            //Barra lateral
            include 'asidesith.php'
            ?>
        </section>
    </div>

    <div>
        <section>
            <h1>Apagar Sith</h1>
            <form action="" method="post">
                <label for="id">ID: </label>
                <input type="number" name="id" id="id">
                <input type="submit" value="Deletar">
            </form>

            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                deletar_sith($conexao, $_POST['id']);
            }
            ?>

        </section>
    </div>

    <a href="?off_conf=1">Sair do Modo Confidencial</a>

    <div>
        <section>
            <?php include '../../../headerfooter/footer.php'?>
        </section>
    </div>
</body>
</html>