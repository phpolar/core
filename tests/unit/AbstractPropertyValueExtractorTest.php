<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core;

use PHPUnit\Framework\TestCase;
use ReflectionObject;
use ReflectionProperty;

/**
 * @covers \Phpolar\Phpolar\Core\AbstractPropertyValueExtractor
 */
final class AbstractPropertyValueExtractorTest extends TestCase
{
    /**
     * @testdox Shall immutably set the value of the property if it is initialized
     */
    public function test1()
    {
        $sut = new class() extends AbstractPropertyValueExtractor { };
        $obj = new class() {
            public string $someProp = "some value";
        };
        $copy = $sut->withPropVal(new ReflectionProperty($obj, "someProp"), $obj);
        $reflectionObj = new ReflectionObject($copy);
        $this->assertSame("some value", $reflectionObj->getProperty("val")->getValue($copy));
    }

     /**
      * @testdox Shall immutably set the default value of the property if it is not initialized
      */
    public function test2()
    {
        $sut = new class() extends AbstractPropertyValueExtractor { };
        $obj = new class() {
            public string $someProp; // not initialized
        };
        $copy = $sut->withPropVal(new ReflectionProperty($obj, "someProp"), $obj);
        $reflectionObj = new ReflectionObject($copy);
        $this->assertNull($reflectionObj->getProperty("val")->getValue($copy));
    }
}