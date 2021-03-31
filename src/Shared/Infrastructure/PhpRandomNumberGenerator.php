<?php

declare(strict_types = 1);

namespace StiSolutions\Shared\Infrastructure;

use StiSolutions\Shared\Domain\RandomNumberGenerator;

final class PhpRandomNumberGenerator implements RandomNumberGenerator
{
    public function generate(): int
    {
        return random_int(1, 5);
    }
}
