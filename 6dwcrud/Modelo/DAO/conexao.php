<?php
abstract class Conexao
{
    public static function getIstance()
    {
        $dsn = 'mysql:host=localhost;dbname=bdphp';
        $user = 'root';
        $pass = '';
        try {$pdo = new PDO($dsn, $user, $pass);
            $pdo->setATTribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch (PDOException $exc){
            echo $exc->getMessage();
        }
    }
}