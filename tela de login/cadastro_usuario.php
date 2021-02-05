<?php

/*
    2 - Validação dos dados
    3 - Cadastro em banco de dados
    4 - tratativa do e-mail( e-mail já cadastrado)
*/

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$conf_senha = md5($_POST['conf_senha']);


if (strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha == $conf_senha) {
    $conn = mysqli_connect("localhost", "root", "", "sistem");

    $sql = "INSERT INTO usuarios (nome, email, senha) values ('$nome', '$email', '$senha')";

    $conn->query($sql);

    echo "<script>
        alert('casdatro efetuado')
        window.location.href = 'index.php'
        </script>
        ";


}
else if ($senha != $conf_senha) {
    echo "<script>
        alert('as senhas devem ser igauis')
        window.location.href = 'cadastro.php'
        </script>
        ";
}
else if (strlen($nome) <= 3) {
    echo "<script>
        alert('digite um nome valido')
        window.location.href = 'cadastro.php'
        </script>
        ";
}
else if (strlen($email) <= 3) {
    echo "<script>
    alert('digite um email valido')
    window.location.href = 'cadastro.php'
    </script>
    ";
}
else if (strlen($senha) <= 3) {
    echo "<script>
    alert('digite uma senha valido')
    window.location.href = 'cadastro.php'
    </script>
    ";
}