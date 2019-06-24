<?php

require_once __DIR__ . '/vendor/autoload.php';


use Poyu\Grpc\ExampleServiceClient;
use Poyu\Grpc\ExampleRequest;


$client = new ExampleServiceClient('127.0.0.1:5566', [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);

list($response, $status) = $client->Calculate(new ExampleRequest([
    'a' => 1,
    'b' => 2,
    'op' => '+',
]))->wait();

var_export($status);
var_export($response->getC());
