<?php

// class Conexao {
//     public static minhaconexao(){
//         $servername = "localhost";
//         $username = "root";
//         $passoword = "";
//         $database = "vendasfullstack";

//         $conn = mysqli_connect($servername,$username,$passoword, $database);
//     }
// }


class Conexao
{
    public static function getDb()
    {
        $conn = new PDO(
            "mysql:host=localhost;dbname=vendasfullstack;charset=utf8",
            "root",
            ""
        );

        if ($conn) {
            // return  "<h1>Deu certo :) </h1>";
            return $conn;
        }else{
            return "<h1>Erro ao realizar conexão</h1>";
        }
        
    }
}


