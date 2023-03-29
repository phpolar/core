<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core\Validation\Exception;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

#[CoversClass(ValidatorWithNoErrorMessageException::class)]
final class ValidatorWithNoErrorMessageExceptionTest extends TestCase
{
    #[TestDox("Shall include the class name in the message.")]
    public function test1()
    {
        $sut = new ValidatorWithNoErrorMessageException("FakeClassName");
        $this->assertStringContainsString("FakeClassName", $sut->getMessage());
    }
}
