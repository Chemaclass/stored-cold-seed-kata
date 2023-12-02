<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;
use StoredColdSeedKata\StoredColdSeed;

final class StoredColdSeedTest extends TestCase
{
    public function test_read_word(): void
    {
        $coldSeed = new StoredColdSeed();

        self::assertSame('Not implemented yet...', $coldSeed->readWord("01001"));
    }
}
