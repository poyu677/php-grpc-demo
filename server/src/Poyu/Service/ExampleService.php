<?php

namespace Poyu\Service;

use Poyu\Grpc\ExampleServiceInterface;
use Poyu\Grpc\ExampleResponse;
use Poyu\Grpc\ExampleRequest;
use Spiral\GRPC\ContextInterface;

class ExampleService implements ExampleServiceInterface
{
    public function Calculate(ContextInterface $ctx, ExampleRequest $in): ExampleResponse
    {
        $a = $in->getA();
        $b = $in->getB();
        $op = $in->getOp();

        switch ($op) {
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
            case '*':
                $result = $a * $b;
                break;
            case '/':
                $result = $a / $b;
                break;

            default:
                $result = 0;
        }

        return new ExampleResponse([
            'c' => $result
        ]);
    }
}
