<?php
namespace Database;
use PDO;
class DB {
    public static $db;
    private $options = [
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    private static function query ($args) {
        if (!self::$db) {
            self::connect (['localhost', 'db_master2', 'root', 'password']);
        }
        $args[1] = is_array ($args[1]) ? $args[1] : [$args[1]]; // Convert vars to array IF NOT array
        if (!($query = self::$db->prepare($args[0]))) return array ('error' => true, 'message' => 'Cant prepare stetement.');
        if (!($query->execute($args[1]))) return array ('error' => true, 'message' => 'Cant execute stetement.');
        return $query;
    }
    public static function select () {
        return self::query (func_get_args ())->fetchAll();
    }
    public static function insert () {
        return self::query (func_get_args ())->lastInsertID();
    }
    public static function connect ($db) {
        $server = "mysql:host=".$db[0].";dbname=".$db[1].";charset=utf8mb4";
        try {
            self::$db = new PDO ($server, $db[2], $db[3], $options);
        } catch (PDOException $e) {
            return array ('error' => true, 'message' => "DB ERROR: Unable to connect to database. Please check and configure database connection to continue.", 'debug_message' => $e->getMessage());
        }
    }
}