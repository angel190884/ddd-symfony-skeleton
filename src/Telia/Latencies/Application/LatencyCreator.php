<?php


namespace StiSolutions\Telia\Latencies\Application;


use StiSolutions\Telia\Latencies\Domain\LatencyRepository;
use StiSolutions\Telia\Latencies\Domain\Latency;

final class LatencyCreator
{
    private $repository;

    /**
     * LatencyCreator constructor.
     * @param LatencyRepository $repository
     */
    public function __construct(LatencyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(
        string $id,
        string $timestamp,
        string $timestampMessage,
        string $timestampJson,
        string $timestampSend,
        string $timestampAck
    )
    {
        $latency = new Latency(
            $id,
            $timestamp,
            $timestampMessage,
            $timestampJson,
            $timestampSend,
            $timestampAck
        );

        $this->repository->save($latency);
    }
}