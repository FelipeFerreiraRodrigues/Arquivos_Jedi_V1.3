<?php include '../../../login/vefuser.php';
include '../../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Siths</title>
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
            <h1>Cadastrar Sith</h1>
            <form action="" method="post">
                <br><label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <br><label for="hierarquia">Hierarquia: </label>
                <input type="text" name="hierarquia" id="hierarquia" required>
                <br><label for="ano">Ano: </label>
                <input type="text" name="ano" id="ano" required>
                <br><label for="url_image">Imagem em URL: </label>
                <input type="text" name="url_image" id="url_image" required>
                <br><input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
                </form>

                <?php
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    create_sith($conexao, $_POST['nome'], $_POST['hierarquia'], $_POST['ano'], $_POST['url_image']);
                }
                ?>

        </section>
    </div>

    <div>
        <section>
            <?php include '../../../headerfooter/footer.php'?>
        </section>
    </div>
</body>
</html>