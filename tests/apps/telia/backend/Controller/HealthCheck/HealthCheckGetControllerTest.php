<?php


namespace apps\telia\backend\Controller\HealthCheck;


use PHPUnit\Framework\TestCase;

class HealthCheckGetControllerTest extends TestCase
{
    public function testPruebaDeIgualdadParaPruebaPhpUnit()
    {
        $this->assertEquals(3,3);
    }
}