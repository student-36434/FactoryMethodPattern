<?php


class Car extends TransportAbstract
{
    public function run(): void
    {
        echo 'Prędkośc' . get_class($this) . ' 120 km, pojemność 5 osób';
    }
}