<?php


abstract class TransportAbstract
{
    /**
     * Create new class
     */
    public static function initial($class)
    {
        return new $class();
    }

    /**
     * Common methods
     */
    abstract public function run();
}