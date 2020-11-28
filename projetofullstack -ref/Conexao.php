<?php

class Conexao {
    public static minhaconexao(){
        $servername = "localhost";
        $username = "root";
        $passoword = "";
        $database = "vendasfullstack";

        $conn = mysqli_connect($servername,$username,$passoword, $database);
    }
}