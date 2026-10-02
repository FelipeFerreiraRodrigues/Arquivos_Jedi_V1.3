<?php include '../../login/vefuser.php';
include '../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Planetas</title>
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
            <h1>Atualizar Planeta</h1>
        <form action="" method="post">
            <label for="id">ID: </label>
            <input type="number" name="id" id="id" placeholder="Insira o ID para atualizar" required><br>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br>
            <label for="regiao">Região: </label>
            <input type="text" name="regiao" id="regiao"><br>
            <label for="geografia">Geografia: </label>
            <input type="text" name="geografia" id="geografia"><br>
            <label for="url_image">Imagem em URL:</label>
            <input type="text" name="url_image" id="url_image"><br>
            <input type="submit" value="Atualizar">
            <input type="reset" value="Limpar">
        </form>
       <?php
       if($_SERVER['REQUEST_METHOD'] == "POST"){
            atualizar_plan($conexao, $_POST['id'], $_POST['nome'], $_POST['regiao'], $_POST['geografia'], $_POST['url_image']);
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