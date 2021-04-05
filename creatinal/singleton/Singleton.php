<?php

final class Singleton
{
    private static ?Singleton $instance;

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

    public static function getInstacnce(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}
