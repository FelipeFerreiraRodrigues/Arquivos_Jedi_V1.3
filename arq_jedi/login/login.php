<?php require_once '../database/function.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <section>
        <?php
        include '../headerfooter/header.php';
        ?>
    </section>

    <div>
        <section>
            <h1>Faça o Login</h1>
            <form action="" method="post">
                <br><label for="email">Email:</label>
                <input type="text" name="email" id="email" required><br>
                <label for="passwd">Senha:</label>
                <input type="password" name="passwd" id="passwd" required><br>
                <input type="submit" value="Login">
                <input type="reset" value="Limpar">
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $usuario = loginuser($conexao, $_POST['email']);
                if($usuario['email'] == $_POST['email'] && $usuario['passwd'] == $_POST['passwd']){
                    session_start();
                    $_SESSION['id'] = $usuario['id'];
                    header("Location: ../index.php");
                    exit();
                } else {
                echo "Erro: Usuário ou senha inválido!";
                }
            }
            ?>
        </section>
    </div>

    <div>
        <section>
            <?php
            include '../headerfooter/footer.php';
            ?>
        </section>
    </div>

</body>
</html>