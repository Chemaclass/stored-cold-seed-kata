<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;
use StoredColdSeedKata\StoredColdSeed;

final class StoredColdSeedTest extends TestCase
{
    public function test_read_word(): void
    {
        $seed = new StoredColdSeed();

        self::assertNotEmpty($seed);
    }
}
