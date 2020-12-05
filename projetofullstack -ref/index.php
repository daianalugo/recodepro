<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">    
    <script src="script.js"></script>
    <title>Full Stack</title>
</head>

<body>
                <!-- ***** MENU ***** -->
    <?php require "./partials/nav.html" ?>


                <!-- ***** FORMA DE PAGAMENTO ***** -->
    <div class="pgto">
        <img onmouseover="aumentar(this)" onmouseout="normal(this)"  src="./img/formasdepgto.jpeg" alt=""  width="200px" height="50%">
    </div>
         



                <!-- ***** FORMULARIO ***** -->
    <?php require "./partials/formulario.html" ?>

   

   <?php
        $servername = "localhost";
        $username = "root";
        $passoword = "";
        $database = "vendasfullstack";

        $conn = mysqli_connect($servername,$username,$passoword, $database);
        
        // if(isset($_POST['nome']) && isset($_POST['email'] )) {
        //     echo "dados recebidos";

            $nome = $_POST['nome'];
            $email = $_POST ['email'];

            $sql = "Insert into mensagem (nome, email) values ('$nome','$email')";
            $result = $conn ->query($sql);

            if($result){
                
                echo "Cadastrado dev $nome, com o email  $email)";
                $array = array('um' => '$nome', 'dois'=>'$email');
                print_r ($array);
                json_encode($array); 
                print_r ($array); 
                            
            } else {
                echo "";
            }

        // }

        ?>

        <!-- ***** FOOTER ***** -->
    <?php require "./partials/footer.html" ?>           
 

</body>
</html>