<?php

require "Conexao.php";

class Vendedor
{
    public $id;
    public $name;
    public $telphone;
    public $img;

    public static function getAll()
    {
        // $conn = new Connection;   @@ static no Connection.php, só funciona em metodos estaticos
        // $connection = $conn->getDb();
        $connection = Conexao::getDb();

        $stmt = $connection->query("SELECT * FROM vendedores");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}