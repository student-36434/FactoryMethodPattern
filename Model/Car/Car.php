<?php

class Car implements Transport
{
    public function run(): string
    {
        return  get_class($this) . ' prędkośc 120 km, pojemność 4 osoby';
    }
}