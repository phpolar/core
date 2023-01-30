<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core;

use PHPUnit\Framework\TestCase;
use ReflectionObject;
use ReflectionProperty;

/**
 * @covers \Phpolar\Phpolar\Core\AbstractPropertyNameExtractor
 */
final class AbstractPropertyNameExtractorTest extends TestCase
{
    /**
     * @testdox Shall immutably set the property name
     */
    public function test1()
    {
        $sut = new class() extends AbstractPropertyNameExtractor {};
        $obj = new class() {
            public string $propB = "some value";
        };
        $copy = $sut->withPropName(new ReflectionProperty($obj, "propB"));
        $reflectionObj = new ReflectionObject($copy);
        $this->assertSame("propB", $reflectionObj->getProperty("propName")->getValue($copy));
    }
}