<?php include '../../../login/vefuser.php';
include '../../../database/function.php'?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Siths</title>
</head>
<body>
    <section>
        <?php
        //Header do site
        include '../../../headerfooter/header.php'
        ?>
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
            <h1>Exibidor de Sith Específico</h1>
            <form action="" method="post">
                <label for="id">ID: </label>
                <input type="number" name="id" id="id" placeholder="Insira o ID para consultar a espécie" required>
                <input type="submit" value="Consultar">
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                readid_sith($conexao, $_POST['id']);
            }
            ?>
        </section>
    </div>

    <div>
        <section>
            <h2>Aqui será onde ficará o READ select da página</h2>
        </section>
    </div>

    <div>
        <section>
            <?php
            //Footer do site
            include '../../../headerfooter/footer.php'
            ?>
        </section>
    </div>
</body>
</html>