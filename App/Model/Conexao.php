<?php
namespace App\Model;

class Conexao
{    private static $instance;

    public static function getConn()
    {
        if (!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost;dbname=formulario;', 'root', '10152030');
        endif;
        return self::$instance;
    }

}