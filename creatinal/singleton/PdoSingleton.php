<?php

final class Singleton
{
    private static ?PDO $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    /**
     * Avoid deserialization
     */
    private function __wakeup()
    {
    }

    public static function getInstacnce(): PDO
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=php_db', 'root', '123456');
        }

        return self::$instance;
    }
}
