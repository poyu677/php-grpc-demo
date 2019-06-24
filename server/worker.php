<?php

require_once __DIR__ . '/vendor/autoload.php';

$server = new Spiral\GRPC\Server();
$server->registerService(Poyu\Grpc\ExampleServiceInterface::class, new Poyu\Service\ExampleService());

$worker = new  Spiral\RoadRunner\Worker(new Spiral\Goridge\StreamRelay(STDIN, STDOUT));
$server->serve($worker);
