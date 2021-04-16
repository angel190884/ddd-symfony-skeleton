<?php

declare(strict_types=1);

namespace StiSolutions\Tests\Telia\Latencies\Application;

use PHPUnit\Framework\TestCase;
use StiSolutions\Telia\Latencies\Application\LatencyCreator;
use StiSolutions\Telia\Latencies\Domain\Latency;
use StiSolutions\Telia\Latencies\Domain\LatencyRepository;

final class LatencyCreatorTest extends TestCase
{
    /** @test */
    public function it_should_create_a_valid_latency(): void
    {
        $repository = $this->createMock(LatencyRepository::class);
        $creator = new LatencyCreator($repository);

        $id = 'some_id';
        $timestamp = "2021-04-06 09:25:32";
        $timestampMessage = "2021-04-06 09:25:32.723000";
        $timestampJson = "2021-04-06 09:25:32.749000";
        $timestampSend = "2021-04-06 09:25:32.749000";
        $timestampAck = "2021-04-06 09:25:32.749000";

        $latency = new Latency(
            $id,
            $timestamp,
            $timestampMessage,
            $timestampJson,
            $timestampSend,
            $timestampAck
        );
        $repository->method("save")->with($latency);

        $creator->__invoke(
            $id,
            $timestamp,
            $timestampMessage,
            $timestampJson,
            $timestampSend,
            $timestampAck
        );
    }
}