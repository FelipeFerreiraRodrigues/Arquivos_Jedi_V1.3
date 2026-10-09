<?php

define('conf_passwd', '666');
if (isset($_GET['off_conf'])) {
    unset($_SESSION['on_conf']);
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['conf_passwd'])) {
    IF ($_POST['conf_passwd'] === conf_passwd) {
        $_SESSION['on_conf'] = true;
        unset($_SESSION['origem']);
        header ('Location: ' . $_SERVER['REQUEST_URI']);
        exit();
    } else {
        $anterior = $_SERVER['origem'] ?? '../intro.php';
        unset($_SESSION['origem']);
        header("Location: $anterior");
        exit();
    }
}

if (empty($_SESSION['on_conf'])) { 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confidencial</title>
</head>
<body>
    <header>
        <h1>Senha para Modo Confidencial Requerida!</h1>
        <p>Digite a senha no formulário abaixo para acessar modo confidencial</p>
    </header>

    <section>
        <div>
            <form action="" method="post">
                <input type="password" name="conf_passwd" id="conf_passwd">
                <input type="submit" value="Acessar">
            </form>
        </div>
    </section>

    <a href="../intro.php">Voltar</a>
</body>
</html>

<?php
exit();
}
?>