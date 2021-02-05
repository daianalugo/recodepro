<?php

 $email = $_POST['email'];
 $senha = md5($_POST['senha']);

 if (strlen($email) > 3 && strlean($senha) > 3 ){
    $conn = mysqli_connect("localhost", "root", "", "sistem");

    //execução da instrução SQL
   $resultado_consulta = $conn->query("SELECT * from usuarios where email='$email' AND senha='$senha'");

   //$usuarios recebe a lista de usuarios
   $usuarios = mysqli_fetch_all($resultado_consulta);


    echo '<pre>';
    print_r($usuarios);
    echo '</pre>';

 } 
 else {
     echo "
        <script>
        alert('e-mail ou senha invalidos')
        location.href= 'index.php'
        </script>
     ";
 }