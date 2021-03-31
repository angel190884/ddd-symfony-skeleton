<?php

namespace StiSolutions\Tests\Shared\Infrastructure\Behat;

use Behat\Gherkin\Node\PyStringNode;
use Behat\Mink\Session;
use Behat\MinkExtension\Context\RawMinkContext;
use StiSolutions\Tests\Shared\Infrastructure\Mink\MinkHelper;
use StiSolutions\Tests\Shared\Infrastructure\Mink\MinkSessionRequestHelper;


/**
 * Defines application features from the specific context.
 */
final class ApiRequestContext extends RawMinkContext
{
    private $request;

    public function __construct(Session $session)
    {
        $this->request = new MinkSessionRequestHelper(new MinkHelper($session));
    }

    /**
     * @Given I send a :method request to :url
     */
    public function iSendAGetRequestTo($method, $url): void
    {
        $this->request->sendRequest($method, $url);
    }

    /**
     * @Given I send a :method request to :url with body:
     */
    public function iSendARequestToWithBody($method, $url, PyStringNode $body): void
    {
        $this->request->sendRequestWithPyStringNode($method, $this->locatePath($url), $body);
    }

}
