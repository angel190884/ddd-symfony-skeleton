<?php


namespace apps\imovit\backend\Controller\HealthCheck;


use PHPUnit\Framework\TestCase;
use StiSolutions\Apps\Imovit\Backend\Controller\HealthCheck\HealthCheckGetController;
use StiSolutions\Tests\Shared\Infrastructure\ConstantRandomNumberGenerator;

final class HealthCheckGetControllerTest extends TestCase
{
    public function testPruebaDeIgualdadParaPruebaPhpUnit()
    {
        $this->assertEquals(3,3);
    }
}