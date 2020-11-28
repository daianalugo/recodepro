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

    <!-- <nav>
        <label class="logo">Full Stack Eletro</label>
        <ul class="nav-links">           
            <li><a target="blank" href= "index.php">Home</a></li>
            <li><a target="blank" href= "produtos.php">Produtos</a></li>
            <li><a target="blank" href= "loja.php">Loja</a></li>     
        </ul>
    </nav> -->


    <nav>
        <label class="logo">Full Stack Eletro</label>
        <nav class="list-group list-group-item-danger ">           
            <a class="list-group-item text-white subnav " target="blank" href= "index.php">Home</a>
            <a class="list-group-item text-white subnav" target="blank" href= "produtos.php">Produtos</a>
            <a class="list-group-item  subnav" target="blank" href= "loja.php">Loja</a>     
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
   
              
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>