<?php
$host = "192.168.10.47";
$dbname = "jediarch";
$user = "jediarch";
$pass = "I1D46A";

try{
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
    );
    echo "Conexão realizada com sucesso!<br><hr>";
} catch (PDOException $e) {
    echo "Erro " . $e->getMessage();
}
?>