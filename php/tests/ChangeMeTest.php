<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;
use StoredColdSeedKata\ChangeMe;

final class ChangeMeTest extends TestCase
{
    public function test_change_me(): void
    {
        $foo = new ChangeMe();

        self::assertSame('TODO: not implemented yet...', $foo->readWord(''));
    }
}
