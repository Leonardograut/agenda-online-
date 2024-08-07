<?php
require 'config.php';

$login = filter_input(INPUT_POST, 'login');
$senha = filter_input(INPUT_POST, 'senha');

if ($login && $senha) {

    $sql = $pdo->prepare("SELECT * FROM users WHERE login = :login");
    $sql->bindValue(':login', $login);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        
        $sql = $pdo->prepare("INSERT INTO users (login, senha) VALUES (:login, :senha)");
        $sql->bindValue(':login', $login);
        $sql->bindValue(':senha', $senha);

        if ($sql->execute()) {
            header("Location: index.php");
            exit;
        } else {
            echo "Erro ao inserir usuário.";
        }
        
    } else {
        header('Location: cadastrar.php');
        exit;
    }
}

?>