<?php

use Phpolar\Phpolar\Tests\Stubs\ResponseFactoryStub;
use Phpolar\Phpolar\Tests\Stubs\StreamFactoryStub;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

return [
    ResponseFactoryInterface::class => new ResponseFactoryStub(),
    StreamFactoryInterface::class => static fn () => new StreamFactoryStub(),
];
