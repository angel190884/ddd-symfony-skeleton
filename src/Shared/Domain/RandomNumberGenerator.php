<?php
declare(strict_types = 1);

namespace StiSolutions\Shared\Domain;

interface RandomNumberGenerator
{
    public function generate(): int;
}