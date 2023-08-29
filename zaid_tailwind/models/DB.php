<?php

class DB
{
    private static $hostname = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "class_ranks";

    public static $db;

    public static function connect()
    {
        self::$db = mysqli_connect(self::$hostname, self::$username, self::$password, self::$database);

        if (self::$db->connect_error) {
            die("Koneksi error");
        }
        return self::$db;
    }
}
