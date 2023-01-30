<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core;

use Phpolar\Phpolar\Core\Exception\InvalidInputTypeCastToStringException;

/**
 * Contains most form field input types.
 */
enum InputTypes
{
    case Date;
    case Number;
    case Text;
    case Checkbox;
    case Hidden;
    case Invalid;

    /**
     * Convert the input type representation to a string.
     *
     * @api
     *
     * @throws InvalidInputTypeCastToStringException
     */
    public function asString(): string
    {
        return match ($this) {
            InputTypes::Date => "datetime-local",
            InputTypes::Number => "number",
            InputTypes::Text => "text",
            InputTypes::Checkbox => "checkbox",
            InputTypes::Hidden => "hidden",
            InputTypes::Invalid => throw new InvalidInputTypeCastToStringException(),
        };
    }
}
