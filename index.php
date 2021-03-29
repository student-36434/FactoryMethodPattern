<?php

$bus = TransportAbstract::initial('Bus');
$bus->run();

$car = TransportAbstract::initial('Car');
$car->run();
