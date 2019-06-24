<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Poyu\Grpc;

/**
 */
class ExampleServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Poyu\Grpc\ExampleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Calculate(\Poyu\Grpc\ExampleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/poyu.grpc.ExampleService/Calculate',
        $argument,
        ['\Poyu\Grpc\ExampleResponse', 'decode'],
        $metadata, $options);
    }

}
