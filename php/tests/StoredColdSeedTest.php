<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;
use StoredColdSeedKata\StoredColdSeed;

final class StoredColdSeedTest extends TestCase
{
    private StoredColdSeed $coldSeed;

    protected function setUp(): void
    {
        $this->coldSeed = StoredColdSeed::withWords($this->words());
    }

    public function test_read_first_word(): void
    {
        self::assertSame('abandon', $this->coldSeed->readWord("1"));
    }

    public function test_read_second_word(): void
    {
        self::assertSame('ability', $this->coldSeed->readWord("10"));
    }

    public function test_read_31th_word(): void
    {
        self::assertSame('adult', $this->coldSeed->readWord("11111"));
    }

    public function test_read_words(): void
    {
        self::assertSame(
            'abandon ability able about above',
            $this->coldSeed->readWords(["01", "10", "11", '100', '101'])
        );
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
