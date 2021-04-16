<?php

declare(strict_types=1);

namespace StiSolutions\Apps\Telia\Backend\Controller\Latencies;


use StiSolutions\Shared\Infrastructure\Symfony\ApiController;
use StiSolutions\Telia\Latencies\Application\LatencyCreator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class LatenciesPutController extends ApiController
{
    private LatencyCreator $creator;

    public function __construct(LatencyCreator $creator)
    {
        $this->creator = $creator;
    }

    /**
     * @param string $id
     * @param Request $request
     * @return Response
     */
    public function __invoke(string $id, Request $request): Response
    {
        $timestamp = $request->get('timestamp');
        $timestampMessage = $request->get('timestamp_message');
        $timestampJson = $request->get('timestamp_json');
        $timestampSend = $request->get('timestamp_send');
        $timestampAck = $request->get('timestamp_ack');

        $this->creator->__invoke($id,$timestamp,$timestampMessage, $timestampJson, $timestampSend, $timestampAck);

        return new Response('', Response::HTTP_CREATED);
    }
}