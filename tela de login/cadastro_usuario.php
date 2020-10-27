<?php

/*
    2 - Validação dos dados
    3 - Cadastro em banco de dados
*/

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];


if (strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha == $conf_senha) {
    $conn = mysqli_connect("localhost", "root", "", "sistem");

    $sql = "INSERT INTO usuarios (nome, email, senha) values ('$nome', '$email', '$senha')";

    $conn->query($sql);
}
else if ($senha != $conf_senha) {
    echo "As senhas devem ser iguais, tente novamente!";
}
else if (strlen($nome) <= 3) {
    echo "Digite um nome válido para realizar o cadastro";
}
else if (strlen($email) <= 3) {
    echo "Digite um e-mail válido para realziar o cadastro.";
}
else if (strlen($senha) <= 3) {
    echo "Digite uma senha válida para realizar o cadastro";
}