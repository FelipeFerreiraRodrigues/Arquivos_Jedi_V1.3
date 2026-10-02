<?php require_once '../database/function.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <section>
        <?php
        include '../headerfooter/header.php'
        ?>
    </section>

    <div>
        <section>
            <h1>Cadastrar-se</h1>
            <form action="" method="post">
                <br><label for="email">Email:</label>
                <input type="text" name="email" id="email" required><br>
                <label for="passwd">Senha:</label>
                <input type="password" name="passwd" id="passwd" required><br>
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                cadastraruser($conexao, $_POST['email'], $_POST['passwd']);
                header("Location: ../index.php");
                exit();
            }
            ?>
        </section>
    </div>

    <div>
        <section>
            <?php
            include '../headerfooter/footer.php'
            ?>
        </section>
    </div>
</body>
</html>