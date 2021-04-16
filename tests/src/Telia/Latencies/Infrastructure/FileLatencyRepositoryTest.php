<?php

declare(strict_types=1);

namespace StiSolutions\Tests\Telia\Latencies\Infrastructure;


use PHPUnit\Framework\TestCase;
use StiSolutions\Telia\Latencies\Domain\Latency;
use StiSolutions\Telia\Latencies\Infrastructure\FileLatencyRepository;

final class FileLatencyRepositoryTest extends TestCase
{
    /** @test  */
    public function it_should_save_a_valid_latency()
    {
        $repository = new FileLatencyRepository();

        $latency = new Latency(
            'some_id',
            "2021-04-06 09:25:32",
            "2021-04-06 09:25:32.723000",
            "2021-04-06 09:25:32.749000",
            "2021-04-06 09:25:32.749000",
            "2021-04-06 09:25:32.749000"
        );

        $repository->save($latency);

    }

    /** @test */
    public function it_should_return_an_existing_latency(): void
    {
        $repository = new FileLatencyRepository();

        $latency = new Latency(
            'some_id',
            "2021-04-06 09:25:32",
            "2021-04-06 09:25:32.723000",
            "2021-04-06 09:25:32.749000",
            "2021-04-06 09:25:32.749000",
            "2021-04-06 09:25:32.749000"
        );

        $repository->save($latency);

        $this->assertEquals($latency, $repository->search($latency->id()));
    }

    /** @test  */
    public function it_should_not_return_a_non_existing_latency()
    {
        $repository = new FileLatencyRepository();

        $this->assertNull($repository->search('ramdomId'));
    }
}