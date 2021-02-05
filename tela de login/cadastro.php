<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/global.css">
    <link href = "https://fonts.googleapis.com/css2? family = Roboto: wght @ 500; 700 & display = swap" rel = "stylesheet">

    <title>Entre ou casdastre-se</title>  
    
</head>
<body>
    <main>
        <div class="card">
            <h1>Cadastre-se</h1>
            <form action="cadastro_usuario.php" method="post">
                <input type="text" name="nome" placeholder="Seu nome"/>
                <input type="email" name ="email" placeholder="Seu e-mail"/>
                <input type="password" name="senha" placeholder="Sua senha"/>
                <input type="password" name="conf_senha" placeholder="Confirme sua senha">
                <button type="submit"><b>Cadastre-se</b></button>
            </form>
            <a href="./index.php">Ja possui cadastro? Clique aqui</a>

        </div>

    </main>>

</body>