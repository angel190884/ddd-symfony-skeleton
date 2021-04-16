<?php


namespace apps\scuti\backend\Controller\HealthCheck;


use PHPUnit\Framework\TestCase;
use StiSolutions\Apps\Scuti\Backend\Controller\HealthCheck\HealthCheckGetController;
use StiSolutions\Tests\Shared\Infrastructure\ConstantRandomNumberGenerator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class HealthCheckGetControllerTest extends TestCase
{
    private ConstantRandomNumberGenerator $randomNumberGenerator;
    private HealthCheckGetController $controller;

    protected function setUp(): void
    {
        $this->randomNumberGenerator = new ConstantRandomNumberGenerator();
        $this->controller = new HealthCheckGetController($this->randomNumberGenerator);
    }

    /** @test */
    public function health_check_scuti()
    {
        $expected = new JsonResponse();
        $expected->setData(
            [
                'app'       => 'scuti',
                'status'    => 'ok',
                'rand'      => 3
            ]
        );

        $request = new Request();
        $response = $this->controller->__invoke($request);

        $this->assertEquals($expected, $response);
    }
}