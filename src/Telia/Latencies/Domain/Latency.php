<?php

declare(strict_types=1);

namespace StiSolutions\Telia\Latencies\Domain;


final class Latency
{
    private string $id;
    private string $timestamp;
    private string $timestampMessage;
    private string $timestampJson;
    private string $timestampSend;
    private string $timestampAck;

    /**
     * Latency constructor.
     * @param string $id
     * @param string $timestamp
     * @param string $timestampMessage
     * @param string $timestampJson
     * @param string $timestampSend
     * @param string $timestampAck
     */
    public function __construct(string $id, string $timestamp, string $timestampMessage, string $timestampJson, string $timestampSend, string $timestampAck)
    {
        $this->id = $id;
        $this->timestamp = $timestamp;
        $this->timestampMessage = $timestampMessage;
        $this->timestampJson = $timestampJson;
        $this->timestampSend = $timestampSend;
        $this->timestampAck = $timestampAck;
    }

    /**
     * @return string
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function timestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * @return string
     */
    public function timestampMessage(): string
    {
        return $this->timestampMessage;
    }

    /**
     * @return string
     */
    public function timestampJson(): string
    {
        return $this->timestampJson;
    }

    /**
     * @return string
     */
    public function timestampSend(): string
    {
        return $this->timestampSend;
    }

    /**
     * @return string
     */
    public function timestampAck(): string
    {
        return $this->timestampAck;
    }
}