<?php

use Phpolar\HttpMessageTestUtils\ResponseFactoryStub;
use Phpolar\HttpMessageTestUtils\StreamFactoryStub;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

return [
    ResponseFactoryInterface::class => new ResponseFactoryStub(),
    StreamFactoryInterface::class => static fn () => new StreamFactoryStub("r"),
];
