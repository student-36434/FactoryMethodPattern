<?php

class CarCreator extends TransportCreatorAbstract
{
    public function createTransport(): Transport
    {
        return new Car();
    }
}