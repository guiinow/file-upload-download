//Esse código pertence à outro arquivo, e ele faz conexao com banco de dados!

<?php


class Conexao{
    private static $instance;

    public static function getConn(){

        if(!isset(self::$instance)):
            self::$instance = new PDO("mysql:host=localhost;dbname=pdo;charset=utf8", "root", "");
        endif;
        
        return self::$instance;

    }
}
