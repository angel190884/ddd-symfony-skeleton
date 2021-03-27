<?php

namespace StiSolutions\Tests\Shared\Infrastructure\Behat;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;


/**
 * Defines application features from the specific context.
 */
class ApiRequestContext implements Context
{
    Const URL = "localhost:9000";
    private $client;
    private $body;
    /**
     * @var mixed
     */
    private $response;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @Given I send a :method request to :url and body:
     * @param string $method
     * @param string $uri
     * @param $body
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function iSendAGetRequestTo($method = "GET", $uri = '/', $body)
    {
        $this->body = $body;
        $url = self::URL.$uri;
        $this->response =
            $this->client->get($url,
                [
                    RequestOptions::JSON => json_decode($this->body)
                ]
            );
        var_dump($this->response);
    }

    /**
     * @Then the response content should be:
     * @param PyStringNode $code
     * @return PyStringNode
     */
    public function theResponseContentShouldBe(PyStringNode $code): PyStringNode
    {
        return $this->response = $code;
    }


}
