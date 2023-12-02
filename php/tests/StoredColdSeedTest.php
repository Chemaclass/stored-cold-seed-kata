<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;
use StoredColdSeedKata\StoredColdSeed;

final class StoredColdSeedTest extends TestCase
{
    public function test_read_first_word(): void
    {
        $coldSeed = new StoredColdSeed($this->words());

        self::assertSame('abandon', $coldSeed->readWord("1"));
    }

    private function words(): string
    {
        return <<<EOF
abandon
ability
able
about
above
absent
absorb
abstract
absurd
abuse
access
accident
account
accuse
achieve
acid
acoustic
acquire
across
act
action
actor
actress
actual
adapt
add
addict
address
adjust
admit
adult
advance
advice
aerobic
EOF;
    }
}
