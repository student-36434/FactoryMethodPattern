<?php

class Bus implements Transport
{
    public function run(): string
    {
        return  get_class($this) . ' prędkośc 80 km, pojemność 40 osób';
    }
}