<?php

class DBConnection {
    private static $connection;

    public static function getConnection() {
        if (self::$connection == null) {
            //Crear objeto de conexión
            self::$connection = new PDO('mysql:host=localhost;dbname=mascotas;charset=utf8', 'root', '');
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }

        return self::$connection;
    }
}

?>