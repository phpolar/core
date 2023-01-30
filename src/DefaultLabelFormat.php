<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core;

/**
 * Provides the label format
 * of an unconfigured property.
 */
final class DefaultLabelFormat extends AbstractPropertyNameExtractor
{
    public function __construct(protected string $propName = "")
    {
    }

    /**
     * Produces the formatted label
     * using the default formatting.
     *
     * @internal
     */
    public function getLabel(): string
    {
        return ucfirst($this->propName);
    }
}
