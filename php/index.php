<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>
<?php
          // *** CONCATENAÇÃO *** 

    $nome = "Icaro";
    $idade = 27;

    echo "<p>Nome :" .$nome . " <br/> "."Idade : ".$idade ."<br/> </p>";



         // *** OPERADORES ARITMETICOS *** 

    $a =10;
    $b =6;

    // $add = $a +$b;
    // $sub = $a -$b;
    // $mult = $a * $b;
    // $div = $a / $b;
    // $mod = $a % $b;
    // $exp = $a ** $b;

    // echo $add . "<br/>";
    // echo $sub . "<br/>";
    // echo $mult . "<br/>";
    // echo $div . "<br/>";
    // echo $mod . "<br/>";
    // echo $exp . "<br/>";

        // *** OPERADORES ATRIBUIÇÃO *** 
    // $a += $b;
    // echo $a . "<br/>";

    // $a -= $b;
    // echo $a . "<br/>";

    // $a *= $b;
    // echo $a . "<br/>";

    // $a /= $b; 
    // echo $a . "<br/>";

    // $a %= $b;
    // echo $a . "<br/>";

    // $a .= $b;
    // echo $a . "<br/>";
    
    // *** OPERADORES INCREMENTO E DECREMEMNTO  *** 

    $count =2;

    // somei um e impri
    echo ++ $count . "<br/>"; 

    // imprimi e depois somei um
    echo $count ++."<br/>"; 

    // somei um e imprimi
    echo --$count ."<br/>"; 

    // impri e depois somei um
    echo $count-- . "<br/>"; 


    // *** OPERADORES DE COMPARAÇÃO  *** 

    $a = 10;
    $b = "10";

    // if ($a == $b){
    //     echo "var A igual a var B ";
    // } else {
    //     echo "variaveis não são iguais ==";
    // }


    if ($a === $b){
        echo "var A igual a var B ";
    } else {
        echo "variaveis não são exatamente/identicos, memso valor e mesmo tipo de variaveis  ===";
    }
    
?>    
</body>
</html>