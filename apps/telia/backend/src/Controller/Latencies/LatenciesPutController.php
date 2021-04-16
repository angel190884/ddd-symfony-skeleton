<?php

declare(strict_types=1);

namespace StiSolutions\Apps\Telia\Backend\Controller\Latencies;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class LatenciesPutController
{
    public function __invoke(string $id, Request $request)
    {
        return new Response('', 201);
    }
}