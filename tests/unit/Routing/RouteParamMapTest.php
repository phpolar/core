<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core\Routing;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(RouteParamMap::class)]
final class RouteParamMapTest extends TestCase
{
    #[TestWith(["/some/path/{id}/{name}", "/some/path/123/somebody", "id", ["name" => "somebody", "id" => "123"]])]
    #[TestDox("Shall retrieve the parameter map as an associative array")]
    public function testb(
        string $givenRoute,
        string $givenRequestPath,
        string $paramKey,
        array $expectedParsedParams,
    ) {
        $sut = new RouteParamMap($givenRoute, $givenRequestPath);
        $this->assertEquals($sut->toArray($paramKey), $expectedParsedParams);
    }

    #[TestWith(["/some/path", "/some/path/123"])]
    #[TestDox("Shall return an empty array when route param map does not contain any routes")]
    public function testc(
        string $givenRoute,
        string $givenRequestPath,
    ) {
        $sut = new RouteParamMap($givenRoute, $givenRequestPath);
        $this->assertEmpty($sut->toArray());
    }

    #[TestWith(["/some/path/{id}", "/some/path/a%20variable%20with%20spaces", "id", ["id" => "a variable with spaces"]])]
    #[TestWith(["/some/path/{id}", "/some/path/a+variable+with+spaces", "id", ["id" => "a variable with spaces"]])]
    #[TestDox("Shall decode the parameter values")]
    public function testd(
        string $givenRoute,
        string $givenRequestPath,
        string $paramKey,
        array $expectedParsedParams,
    ) {
        $sut = new RouteParamMap($givenRoute, $givenRequestPath);
        $this->assertEquals($sut->toArray($paramKey), $expectedParsedParams);
    }
}
