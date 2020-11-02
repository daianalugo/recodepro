<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="script.js"></script>

    <title>Full Stack</title>
</head>
<body>

    <?php
        $servername = "localhost";
        $username = "root";
        $passoword = "";
        $database = "vendasfullstack";

        $conn = mysqli_connect($servername,$username,$passoword, $database);
        
        // if (! $conn){
        //     die("deu ruim". mysqli_connect_error());
        // }

       





        ?>



                  <!-- ***** MENU ***** -->

    <nav>
        <label class="logo" >Full Stack Eletro</label>
        <ul class="nav-links">           
            <li><a target="blank" href= "index.php">Home</a></li>
            <li><a target="blank" href= "produtos.php">Produtos</a></li>
            <li><a target="blank" href= "loja.php">Loja</a></li>     
        </ul>
    </nav>

   

               <!-- ***** LISTA DE PRODUTOS ***** -->

    <section class="sectioncateg">
        <h3>Categorias</h3>
        <ul>
            <li onclick="exibirtodos('todos')">Todos</li>
            <li onclick="exibirCategoria('fogao')">Fogoes</li>
            <li onclick="exibirCategoria ('microondas')">Microondas</li>
        </ul>
    </section>

    <section class="sectionprodutos">

       <?php
       
       $sql = "select * from produtosfs";
       $result = $conn->query($sql);

       if($result->num_rows >0){
           while($rows = $result ->fetch_assoc()){            


        ?>  

        <div class="divprodutos boxprodutos"  style="display: block;">
            <img class="imgproduto" id="imgproduto1"  src="<?php  echo $rows["nomeimg"]; ?>" alt="" onclick="destaque(this) />
            </br>
            <p class= "nomeproduto"> <?php  echo $rows["nome"]; ?> </p>
            <hr>
            <p class="valorproduto"> <?php  echo $rows["preço"]; ?> </p>
            <p class="valoratual"> <?php  echo $rows["precoatual"]; ?> </p>
        </div>

        
        <?php
           }
       }else{
           echo "sme produto";     
       }

       
       ?>  
       

    </section>

    <!-- ***** FORMA DE PAGAMENTO ***** -->

    <div class="pgto">
        <img onmouseover="aumentar(this)" onmouseout="normal(this)"  src="./img/formasdepgto.jpeg" alt=""  width="200px" height="50%">
    </div>


     <!-- <img onmouseover="bigImg(this)" 
    onmouseout="normalImg(this)" border="0"
     src="smiley.gif" alt="Smiley" width="32" height="32"> -->


            <!-- ***** FORMULARIO ***** -->            

   <section class="newsletter">
       <h3>Nesletter</h3>
       <p>Dev´s receba nossas promoçoes por-mail</p>
       <form method="POST">
           <input type="text" placeholder="Seu Nome ">
           <input type="email" placeholder="Seu Email">
           <button>Cadastrar</button>
       </form>
   </section>



      <!-- ***** FOOTER ***** -->

    <footer class="rodape" >
        <p>  
            © Copyright 2020 Full Stack Eletro | Recode       
        </p>
        
    </footer>
    
              
    

</body>
</html>