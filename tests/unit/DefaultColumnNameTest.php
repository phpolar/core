<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core;

use PHPUnit\Framework\TestCase;

/**
 * @covers \Phpolar\Phpolar\Core\DefaultColumnName
 */
final class DefaultColumnNameTest extends TestCase
{
    /**
     * @testdox Shall return the property name with the first letter upper case
     */
    public function test1()
    {
        $sut = new DefaultColumnName("propName");
        $this->assertSame("PropName", $sut->getColumnName());
    }
}
