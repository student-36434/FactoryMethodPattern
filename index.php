<?php

function testFoo(TransportCreatorAbstract $creator)
{
    echo "test funkcji TransportAbstract: " . $creator->createAndRunTransport();
}

testFoo(new BusCreator());
testFoo(new CarCreator());