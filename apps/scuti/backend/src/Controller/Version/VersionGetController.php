<?php

namespace StiSolutions\Apps\Scuti\Backend\Controller\Version;


use Symfony\Component\HttpFoundation\Response;

final class VersionGetController
{
    public function __invoke(): Response
    {
        return new Response(phpinfo());
    }
}