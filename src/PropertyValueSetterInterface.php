<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core;

use ReflectionProperty;

/**
 * Provides a way to *extract* the value of a property.
 *
 * The *extracted* value can be used in a configuration (i.e. validation, formatting, etc.).
 *
 * @internal
 */
interface PropertyValueSetterInterface
{
    /**
     * Immutably sets the `$val` to the value of the given property.
     */
    public function withPropVal(ReflectionProperty $prop, object $obj): static;
}
