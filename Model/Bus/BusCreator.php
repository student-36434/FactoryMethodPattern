<?php

class BusCreator extends TransportCreatorAbstract
{
    public function createTransport(): Transport
    {
        return new Bus();
    }
}