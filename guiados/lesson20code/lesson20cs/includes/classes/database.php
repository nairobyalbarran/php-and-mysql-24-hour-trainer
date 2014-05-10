<?php

/*
 * Database class
 * For one point of database access
 */

class Database {

    //rest of the code will go here
    /**
     * User name to connect to database
     * @var string $_mysqlUser
     */
    private static $_mysqlUser = 'php24sql';
    /*
     * Password to connect to databse
     * @var string $_mysqlPass 
     */
    private static $_mysqlPass = 'hJQV8RTe5t';
    /*
     * Database name
     * @var string $_mysqlDb
     */
    private static $_mysqlDb = 'smithside';
    /*
     * Hostname for the server
     * @var string $_hostName
     */
    private static $_hostName = 'localhost';
    /*
     * Database connection
     * @var Mysqli $connection
     */
    private static $_conecction = NULL;

    /**
     * Get the Database Connection
     * 
     * @return Mysqli
     */
    public static function getConnection() {
        if (!self::$_conecction) {
            self::$_conecction = new mysqli(self::$_hostName, self::$_mysqlUser, self::$_mysqlPass, self::$_mysqlDb);
            if (self::$_conecction->connect_error) {
                die('Connect Error: ' . self::$_conecction->connect_error);
            }
        }
        return self::$_conecction;
    }

    /**
     * Constructor
     */
    private function __construct() {
        
    }

}
