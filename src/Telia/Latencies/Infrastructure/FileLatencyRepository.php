<?php

declare(strict_types=1);

namespace StiSolutions\Telia\Latencies\Infrastructure;


use StiSolutions\Telia\Latencies\Domain\Latency;
use StiSolutions\Telia\Latencies\Domain\LatencyRepository;

final class FileLatencyRepository implements LatencyRepository
{
    CONST FILE_PATH = __DIR__ . '/latencies';

    /**
     * @param Latency $latency
     */
    public function save(Latency $latency): void
    {
        file_put_contents($this->fileName($latency->id()), serialize($latency));
    }

    public function search(string $id): ?Latency
    {
        return file_exists($this->fileName($id))? unserialize(file_get_contents($this->fileName($id))): null;
    }

    private function fileName(string $id): string
    {
        return sprintf('%s.%s.repo', self::FILE_PATH, $id);
    }
}