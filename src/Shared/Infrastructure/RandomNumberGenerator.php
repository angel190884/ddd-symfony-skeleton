<?php

declare(strict_types = 1);

namespace StiSolutions\Shared\Infrastructure;

final class RandomNumberGenerator
{
    public function generate(): int
    {
        return random_int(1, 5);
    }
}
