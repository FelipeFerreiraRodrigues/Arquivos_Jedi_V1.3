<?php include '../../login/vefadm.php';
include '../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Especies</title>
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
            <h1>Atualizar Espécie</h1>
        <form action="" method="post">
            <label for="id">ID: </label>
            <input type="number" name="id" id="id" placeholder="Insira o ID para atualizar" required><br>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br>
            <label for="origem">Origem: </label>
            <input type="text" name="origem" id="origem"><br>
            <label for="idade_max">Idade Máxima: </label>
            <input type="int" name="idade_max" id="idade_max"><br>
            <label for="url_image">Imagem em URL:</label>
            <input type="text" name="url_image" id="url_image"><br>
            <label for="sensitivo">Sensitivo: </label>
            <input type="radio" name="sensitivo" id="sensitivo" value="true">
            <label for="ativo">Sim </label>
            <input type="radio" name="sensitivo" id="sensitivo" value="false">
            <label for="sensitivo">Não </label><br>
            <input type="submit" value="Atualizar">
            <input type="reset" value="Limpar">
        </form>
       <?php
       if($_SERVER['REQUEST_METHOD'] == "POST"){
            atualizar_esp($conexao, $_POST['id'], $_POST['nome'], $_POST['origem'], $_POST['idade_max'], $_POST['sensitivo'], $_POST['url_image']);
       }
       ?>
        </section>
    </div>

    <div>
        <section>
            <h2>Aqui será onde ficará o UPDATE da página</h2>
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