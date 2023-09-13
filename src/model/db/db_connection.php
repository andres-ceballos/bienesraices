<?php

require('db_config.php');

class Connection
{

    public function __construct()
    {
    }

    public static function Connect()
    {

        $DB_DATA = DB_SYSTEM . ':host=' . DB_HOST . '; dbname=' . DB_NOMBRE;

        try {
            $conexion = new PDO($DB_DATA, DB_USUARIO, DB_PASSWORD);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec('SET CHARACTER SET UTF8');
        } catch (Exception $e) {
            echo 'Error ' . $e->getMessage() . '<br>';
            die('Error en la línea ' . $e->getLine());
        } finally {
            return $conexion;
        }
    }
}

 //Connection::Connect();

 ?>