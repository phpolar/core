<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

#[CoversClass(DefaultColumnName::class)]
final class DefaultColumnNameTest extends TestCase
{
    #[TestDox("Shall return the property name with the first letter upper case")]
    public function test1()
    {
        $sut = new DefaultColumnName("propName");
        $this->assertSame("PropName", $sut->getColumnName());
    }
}
