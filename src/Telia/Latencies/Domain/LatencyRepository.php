<?php

declare(strict_types=1);

namespace StiSolutions\Telia\Latencies\Domain;


interface LatencyRepository
{
    public function save(Latency $latency): void;

    public function search(string $id): ?Latency;
}