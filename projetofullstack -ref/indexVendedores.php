<?php
    require "Models/Vendedor.php";
    $vendedores = Vendedor::getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script defer src = "https://use.fontawesome.com/releases/v5.0.8/js/all.js"> </script>
    <script src="script.js"></script>

    <title>Full Stack</title>
</head>
<body>

        <!-- ***** MENU ***** -->
<?php require "./partials/nav.html" ?>


<div class="jumbotron jumbotron-fluid" style="margin-bottom: -13rem;">
  <div class="container-fluid " style="padding: 8rem 0rem;">
    <p class="display-1 text-center font-weight-light" style="font-size: 2rem;">Fale com nossas vendedoras</p>
    <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
  </div>
</div>


    <main class=" "  style="display: inline-flex;" >
        <?php foreach ($vendedores as $vendedor) { ?>
            <div class="card w-50 mx-auto mt-4">
                <div class="card-header text-primary">
                <img class="card-img-top " style="width: 14rem;" src="<?= $vendedor ['img'] ?>" alt="Card image cap">
                    <?= $vendedor ['name'] ?>
                </div>

                <div class="card-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Hic odit quisquam commodi reprehenderit pariatur quas iste
                    nemo suscipit quae officiis laborum, consequuntur eligendi
                    ab perspiciatis nisi consectetur molestias impedit quaerat?
                </div>

                <div class="card-footer  d-flex align-items-center justify-content-end text-info">
                    <a class="btn btn-success" href="https://wa.me/<?= $vendedor['telphone']?>" >
                        <!-- Telefone -->
                        <i class = "fab fa-whatsapp" style="font-size:24px"> </i>
                        
                    </a>
                </div>
            </div>
        <?php } ?>

    </main>

    

                <!-- ***** FORMA DE PAGAMENTO ***** -->
    <div class="pgto">
        <img onmouseover="aumentar(this)" onmouseout="normal(this)"  src="./img/formasdepgto.jpeg" alt=""  width="200px" height="50%">
    </div>



                <!-- ***** FORMULARIO ***** -->
    <?php require "./partials/formulario.html" ?>



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