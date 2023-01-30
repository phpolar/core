<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core\Validation\Exception;

use PHPUnit\Framework\TestCase;

/**
 * @covers \Phpolar\Phpolar\Core\Validation\Exception\ValidatorWithNoErrorMessageException
 */
final class ValidatorWithNoErrorMessageExceptionTest extends TestCase
{
    /**
     * @testdox Shall include the class name in the message.
     */
    public function test1()
    {
        $sut = new ValidatorWithNoErrorMessageException("FakeClassName");
        $this->assertStringContainsString("FakeClassName", $sut->getMessage());
    }
}