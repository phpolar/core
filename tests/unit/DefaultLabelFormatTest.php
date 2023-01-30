<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core;

use PHPUnit\Framework\TestCase;

/**
 * @covers \Phpolar\Phpolar\Core\DefaultLabelFormat
 */
final class DefaultLabelFormatTest extends TestCase
{
    /**
     * @testdox Shall return the property name with the first letter upper case
     */
    public function test1()
    {
        $sut = new DefaultLabelFormat("propName");
        $this->assertSame("PropName", $sut->getLabel());
    }
}
