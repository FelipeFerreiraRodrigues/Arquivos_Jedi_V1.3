<?php
require_once 'connect.php';

function cadastraruser($conexao, $email, $passwd){
    $sql = "INSERT INTO usuarios (email, passwd) VALUES(:email, :passwd)";
    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":passwd", $passwd);

        $stmt->execute();
        echo "Usuário cadastrado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}

function loginuser($conexao, $email){
    $sql = "SELECT id, email, passwd FROM usuarios WHERE email = :email";
    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

function listuser($conexao){
    $sql = "SELECT id, email FROM usuarios";
    try {
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

//Abaixo estão as funções equivalentes as espécies.

function create_esp($conexao, $nome, $origem, $idade_max, $sensitivo, $url_image){
    $sql = "INSERT INTO especies (nome, origem, idade_max, sensitivo, url_image) VALUES (:nome, :origem, :idade_max, :sensitivo, :url_image)";
    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":origem", $origem);
        $stmt->bindParam(":idade_max", $idade_max);
        $stmt->bindParam(":sensitivo", $sensitivo);
        $stmt->bindParam(":url_image", $url_image);

        $stmt->execute();
        echo "Espécie inserida com sucesso!";
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}

function read_esp($conexao){
    $sql = "SELECT * FROM especies ORDER BY id";
    try {

        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        $especies = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($especies as $especie){
            $sensitivo = $especie['sensitivo'] ? 'Sim' : 'Não';
            echo "ID: {$especie['id']}<br>";
            echo "Nome: {$especie['nome']}<br>";
            echo "Origem: {$especie['origem']}<br>";
            echo "Idade Máxima: {$especie['idade_max']}<br>";
            echo "Sensitivo: {$sensitivo}<br>";
            $image = trim($especie['url_image']);
            //Verificar se existe arquivo
            if (!empty($image) && file_exists($image)) {
                //Imprimir imagem
                echo "<img src='{$especie['url_image']}' alt='{$especie['nome']}'   style='max-width: 200px;'><br><hr>";
            } elseif (!empty($image)) {
                //Se não é arquivo, imprime a URL
                echo "<img src='{$image}' alt='{$especie['nome']}' style='max-width: 200px;'><br><hr>";
            } else {
                echo "Erro: A imagem falhou em carregar";
        }
    }

} catch (PDOException $e){
    echo "Erro: " . $e->getMessage();
}
}

function readid_esp($conexao, $id){
    $sql = "SELECT nome, origem, idade_max, sensitivo, url_image FROM especies WHERE id =:id";
        try{
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            $especie = $stmt->fetch(PDO::FETCH_ASSOC);
            echo "Nome: {$especie['nome']}<br>";
            echo "Origem: {$especie['origem']}<br>";
            echo "Idade Máxima: {$especie['idade_max']}<br>";
            echo "Sensitivo: {$especie['sensitivo']}<br>";
            echo "<img src='{$especie['url_image']}' alt='{$especie['nome']}' style='max-width: 200px;'><br><hr>";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
}

function atualizar_esp($conexao, $id, $nome, $origem, $idade_max, $sensitivo, $url_image){

    $sql = "UPDATE especies SET nome = :nome , origem = :origem , idade_max = :idade_max , sensitivo = :sensitivo , url_image = :url_image WHERE id = :id";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":origem", $origem);
        $stmt->bindParam(":idade_max", $idade_max);
        $stmt->bindParam(":sensitivo", $sensitivo);
        $stmt->bindParam(":url_image", $url_image);

        $stmt->execute();
        echo "Espécie atualizada com sucesso!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

function deletar_esp($conexao, $id){
    $sql = "DELETE FROM especies WHERE id = :id";
        try {
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            echo "A espécie de ID $id foi deletada!";
        } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
        }
}

//Abaixo estão as funções equivalentes aos planetas.

function create_plan($conexao, $nome, $regiao, $geografia, $url_image){
    $sql = "INSERT INTO planetas (nome, regiao, geografia, url_image) VALUES (:nome, :regiao, :geografia, :url_image)";
    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":regiao", $regiao);
        $stmt->bindParam(":geografia", $geografia);
        $stmt->bindParam(":url_image", $url_image);

        $stmt->execute();
        echo "Planeta inserido com sucesso!";
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}

function read_plan($conexao){
    $sql = "SELECT * FROM planetas ORDER BY id";
try {

    $stml = $conexao->prepare($sql);
    $stml->execute();

    $planetas = $stml->fetchAll(PDO::FETCH_ASSOC);

    foreach ($planetas as $planeta){
        echo "ID: {$planeta['id']}<br>";
        echo "Nome: {$planeta['nome']}<br>";
        echo "Origem: {$planeta['regiao']}<br>";
        echo "Geografia: {$planeta['geografia']}<br>";
        echo "<img src='{$planeta['url_image']}' alt='{$planeta['nome']}' style='max-width: 200px;'><br><hr>";
    }

} catch (PDOException $e){
    echo "Erro: " . $e->getMessage();
}
}

function readid_plan($conexao, $id){
    $sql = "SELECT nome, regiao, geografia, url_image FROM planetas WHERE id =:id";
        try{
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            $planeta = $stmt->fetch(PDO::FETCH_ASSOC);
            echo "Nome: {$planeta['nome']}<br>";
            echo "Origem: {$planeta['regiao']}<br>";
            echo "Geografia:: {$planeta['geografia']}<br>";
            echo "<img src='{$planeta['url_image']}' alt='{$planeta['nome']}' style='max-width: 200px;'><br><hr>";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
}

function atualizar_plan($conexao, $id, $nome, $regiao, $geografia, $url_image){

    $sql = "UPDATE planetas SET nome = :nome , regiao = :regiao , geografia = :geografia , url_image = :url_image WHERE id = :id";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":regiao", $regiao);
        $stmt->bindParam(":geografia", $geografia);
        $stmt->bindParam(":url_image", $url_image);

        $stmt->execute();
        echo "Planeta atualizada com sucesso!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

function deletar_plan($conexao, $id){
    $sql = "DELETE FROM planetas WHERE id = :id";
        try {
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            echo "O planeta de ID $id foi deletado!";
        } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
        }
}

//Abaixo estão as funções equivalentes aos sith.

function create_sith($conexao, $nome, $hierarquia, $ano, $url_image){
    $sql = "INSERT INTO sith (nome, hierarquia, ano, url_image) VALUES (:nome, :hierarquia, :ano, :url_image)";
    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":hierarquia", $hierarquia);
        $stmt->bindParam(":ano", $ano);
        $stmt->bindParam(":url_image", $url_image);

        $stmt->execute();
        echo "Sith inserido com sucesso!";
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}

function read_sith($conexao){
    $sql = "SELECT * FROM sith ORDER BY id";
try {

    $stml = $conexao->prepare($sql);
    $stml->execute();

    $sith = $stml->fetchAll(PDO::FETCH_ASSOC);

    foreach ($sith as $darth){
        echo "ID: {$darth['id']}<br>";
        echo "Nome: {$darth['nome']}<br>";
        echo "Hierarquia: {$darth['hierarquia']}<br>";
        echo "Ano: {$darth['ano']}<br>";
        echo "<img src='{$darth['url_image']}' alt='{$darth['nome']}' style='max-width: 200px;'><br><hr>";
    }

} catch (PDOException $e){
    echo "Erro: " . $e->getMessage();
}
}

function readid_sith($conexao, $id){
    $sql = "SELECT nome, hierarquia, ano, url_image FROM sith WHERE id =:id";
        try{
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            $darth = $stmt->fetch(PDO::FETCH_ASSOC);
            echo "Nome: {$darth['nome']}<br>";
            echo "Hierarquia: {$darth['hierarquia']}<br>";
            echo "Ano: {$darth['ano']}<br>";
            echo "<img src='{$darth['url_image']}' alt='{$darth['nome']}' style='max-width: 200px;'><br><hr>";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
}

function atualizar_sith($conexao, $id, $nome, $hierarquia, $ano, $url_image){

    $sql = "UPDATE sith SET nome = :nome , hierarquia = :hierarquia , ano = :ano , url_image = :url_image WHERE id = :id";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":hierarquia", $hierarquia);
        $stmt->bindParam(":ano", $ano);
        $stmt->bindParam(":url_image", $url_image);

        $stmt->execute();
        echo "Sith atualizado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

function deletar_sith($conexao, $id){
    $sql = "DELETE FROM sith WHERE id = :id";
        try {
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            echo "O Sith de ID $id foi deletado!";
        } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
        }
}
?>