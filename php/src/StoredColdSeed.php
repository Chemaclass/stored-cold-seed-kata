<?php

declare(strict_types=1);

namespace StoredColdSeedKata;

final class StoredColdSeed
{
    private function __construct(
        private array $words
    ) {
    }

    public static function withWords(string $words): self
    {
        return new self(explode(PHP_EOL, $words));
    }

    public function readWord(string $binary): string
    {
        return $this->words[$binary-1];
    }
}
