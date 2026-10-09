<?php include '../../login/vefadm.php';
include '../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Planetas</title>
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
            <h1>Apagar Planeta</h1>
            <form action="" method="post">
                <label for="id">ID: </label>
                <input type="number" name="id" id="id">
                <input type="submit" value="Deletar">
            </form>

            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                deletar_plan($conexao, $_POST['id']);
            }
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