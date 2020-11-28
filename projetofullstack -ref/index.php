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

    <nav>
        <label class="logo">Full Stack Eletro</label>
        <nav class="list-group list-group-item-danger ">           
            <a class="list-group-item text-white subnav " target="blank" href= "index.php">Home</a>
            <a class="list-group-item text-white subnav" target="blank" href= "produtos.php">Produtos</a>
            <a class="list-group-item text-white subnav" target="blank" href= "loja.php">Loja</a>     
        </nav>
    </nav>

    <!-- ***** FORMA DE PAGAMENTO ***** -->

    <div class="pgto">
        <img onmouseover="aumentar(this)" onmouseout="normal(this)"  src="./img/formasdepgto.jpeg" alt=""  width="200px" height="50%">
    </div>


            <!-- ***** FORMULARIO ***** -->
   <section class="newsletter">
       <h3>Nesletter</h3>
       <p>Dev´s receba nossas promoçoes por-mail</p>
       <form method="POST" name="mensagens" action= "">
           <input type="text" name = "nome" placeholder="Seu Nome ">
           <input type="email" name ="email" placeholder="Seu Email">
           <button type="submit" name="submit" value="enviar">Cadastrar</button>
       </form>
   </section>

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


    <footer class="rodape" >
        <p>  
            © Copyright 2020 Full Stack Eletro | Recode       
        </p>
        
    </footer>
    
              <!-- ***** FOOTER ***** -->
    

</body>
</html>