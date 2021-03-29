<?php


class Bus extends TransportAbstract
{

    public function run(): void
    {
        echo 'Prędkośc' . get_class($this) . ' 80 km, pojemność 40 osób';
    }
}