<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core;

use Phpolar\Phpolar\Core\Exception\InvalidInputTypeCastToStringException;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Phpolar\Phpolar\Core\InputTypes
 * @covers \Phpolar\Phpolar\Core\Exception\InvalidInputTypeCastToStringException
 */
final class InputTypesTest extends TestCase
{
    public function dataProvider(): array
    {
        return [
            [
                "checkbox",
                InputTypes::Checkbox,
            ],
            [
                "datetime-local",
                InputTypes::Date,
            ],
            [
                "hidden",
                InputTypes::Hidden,
            ],
            [
                "number",
                InputTypes::Number,
            ],
            [
                "text",
                InputTypes::Text,
            ],
        ];
    }

    /**
     * @test
     * @dataProvider dataProvider()
     */
    public function shallConvertToExpectedString(string $expected, InputTypes $inputType)
    {
        $this->assertSame($expected, $inputType->asString());
    }

    /**
     * @test
     * @testdox Shall throw an exception when attempting to convert an invalid type to string
     */
    public function shallThrowAnException()
    {
        $this->expectException(InvalidInputTypeCastToStringException::class);
        $this->expectExceptionMessage("Attempting to cast an invalid input type to string.");
        InputTypes::Invalid->asString();
    }
}
