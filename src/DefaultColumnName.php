<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core;

/**
 * Provides the column name
 * of an unconfigured property.
 */
final class DefaultColumnName extends AbstractPropertyNameExtractor
{
    public function __construct(protected string $propName = "")
    {
    }

    /**
     * Produces the formatted label
     * using the default formatting.
     */
    public function getColumnName(): string
    {
        return ucfirst($this->propName);
    }
}
