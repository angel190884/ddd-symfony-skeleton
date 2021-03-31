<?php

declare(strict_types = 1);

namespace StiSolutions\Apps\Imovit\Backend\Controller\HealthCheck;

use StiSolutions\Shared\Domain\RandomNumberGenerator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class HealthCheckGetController
{
    private $generator;

    public function __construct(RandomNumberGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function __invoke(Request $request): Response
    {
        return new JsonResponse(
            [
                'app' => 'imovit',
                'status' => 'ok',
                'rand'         => $this->generator->generate(),
            ]
        );
    }
}
