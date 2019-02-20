<?php

require_once('dbconfig.php');

class Connection {
    private static $instance;
    public static function getConnection() {
        if (!isset(self::$instance)) {
            try {
                
                // Create a new connection.
                // You'll probably want to replace hostname with localhost in the first parameter.
                // Note how we declare the charset to be utf8mb4.  This alerts the connection that we'll be passing UTF-8 data.  This may not be required depending on your configuration, but it'll save you headaches down the road if you're trying to store Unicode strings in your database.  See "Gotchas".
                // The PDO options we pass do the following:
                // PDO::ATTR_ERRMODE enables exceptions for errors.  This is optional but can be handy.
                // PDO::ATTR_PERSISTENT disables persistent connections, which can cause concurrency issues in certain cases.  See "Gotchas".
               
                self::$instance = new PDO("mysql:host=" . DB_HOST . 
                                          ";dbname=" . DB_NAME . 
                                          ";charset=utf8mb4",
                                           DB_USER,
                                           DB_PASSWORD);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                self::$instance->setAttribute(PDO::ATTR_PERSISTENT, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $ex) {
                die("Could not connect to the database $dbname : " . $ex->getMessage());
            }
        }
        return self::$instance;
    }

    public static function prepare($sql) {
        return self::getConnection()->prepare($sql);
    }
}