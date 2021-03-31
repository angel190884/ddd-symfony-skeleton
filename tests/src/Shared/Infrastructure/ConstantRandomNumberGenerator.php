<?php

declare(strict_types = 1);

namespace StiSolutions\Tests\Shared\Infrastructure;

use StiSolutions\Shared\Domain\RandomNumberGenerator;

final class ConstantRandomNumberGenerator implements RandomNumberGenerator
{
    public function generate(): int
    {
        return 3;
    }
}
