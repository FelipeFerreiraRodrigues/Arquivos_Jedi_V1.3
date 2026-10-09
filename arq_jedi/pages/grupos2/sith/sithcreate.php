<?php include '../../../login/vefuser.php';
include '../../../login/confidencial.php';
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
            <form action="" method="post" enctype="multipart/form-data">
                <br><label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <br><label for="hierarquia">Hierarquia: </label>
                <input type="text" name="hierarquia" id="hierarquia" required>
                <br><label for="ano">Ano: </label>
                <input type="text" name="ano" id="ano" required>
                <br><label for="arch_image">Imagem em Arquivo: </label>
                <input type="file" name="arch_image" id="arch_image" accept=""image/*>
                <br><label for="url_image">Imagem em URL: </label>
                <input type="text" name="url_image" id="url_image">
                <br><input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
                </form>

                <?php
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $final_image = "";
                    //Precisa verificar se recebeu imagem em arquivo
                    if (isset($_FILES['arch_image']) && ($_FILES['arch_image']['error'] === UPLOAD_ERR_OK)) {
                        $pasta = "upload/";
                        //Criar pasta para os uploads
                        if (!is_dir($pasta)) {
                            mkdir($pasta, 0755, true);
                        }
                        //Evitar usar o mesmo nome de arquivo duas vezes
                        $extension = pathinfo($_FILES['arch_image']['name'], PATHINFO_EXTENSION);
                        $newname = uniqid("esp_") . "." . $extension;
                        $path = $pasta . $newname;
                        //Mover o arquivo para a pasta
                        if (move_uploaded_file($_FILES['arch_image']['tmp_name'], $path)) {
                            $final_image = $path;
                        }
                    }
                    //Se não tiver arquivo, verificar se tem URL
                    if (empty($final_image) && !empty($_POST['url_image'])) {
                        $final_image = trim($_POST['url_image']);
                    }

                    if (!empty($final_image)) {
                        create_sith($conexao, $_POST['nome'], $_POST['hierarquia'], $_POST['ano'], $final_image);
                    } else {
                        echo "Envie um arquivo de imagem ou uma URL!";
                    }
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