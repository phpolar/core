<?php

declare(strict_types=1);

namespace Phpolar\Phpolar;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

use const \Phpolar\Phpolar\Tests\PROJECT_SIZE_THRESHOLD;

#[RunTestsInSeparateProcesses]
#[CoversNothing]
final class ProjectSizeTest extends TestCase
{
    #[TestDox("Source code total size shall be below \$threshold bytes")]
    public function testa(int | string $threshold = PROJECT_SIZE_THRESHOLD)
    {
        $totalSize = mb_strlen(
            implode(
                preg_replace(
                    [
                        // strip comments
                        "/\/\*\*(.*?)\//s",
                        "/^(.*?)\/\/(.*?)$/s",
                    ],
                    "",
                    array_map(
                        file_get_contents(...),
                        glob(getcwd() . SRC_GLOB, GLOB_BRACE),
                    ),
                ),
            )
        );
        $this->assertGreaterThan(0, $totalSize);
        $this->assertLessThanOrEqual($threshold, $totalSize);
    }
}
