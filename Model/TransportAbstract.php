<?php

abstract class TransportCreatorAbstract
{
    abstract public function createTransport(): Transport;

    public function createAndRunTransport(): string
    {
        $transport = $this->createTransport();

        $result = "Utworzono obiekt klasy " . $transport->run();

        return $result;
    }
}