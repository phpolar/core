<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core;

use ReflectionProperty;

/**
 * Provides a default implementation used to *extract* the name of a property.
 */
abstract class AbstractPropertyNameExtractor
{
    protected string $propName;

    /**
     * Immutably sets the `$propName` with the name of the given property.
     *
     * @internal
     */
    public function withPropName(ReflectionProperty $prop): static
    {
        $copy = clone $this;
        $copy->propName = $prop->getName();
        return $copy;
    }
}
