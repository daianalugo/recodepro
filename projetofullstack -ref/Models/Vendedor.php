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


    public static function getTotalVendedores()
    {
        $connection = Conexao::getDb();
        $stmt = $connection->query("SELECT * count(*) as total_vendedores from vendedores");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // public static function registerVendedor()
    //     {
    //         // insert
    //     }

    //     public static function updateVendedor()
    //     {
    //         // update
    //     }

    //     public static function deleteVendedor()
    //     {
    //         // delete
    //     }


}

   