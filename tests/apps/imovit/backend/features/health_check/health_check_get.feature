Feature: Api status Imovit
  In order to know the server is up and running
  As a health check
  I want to check the api status

  Scenario: Response body
    Given I send a "GET" request to "/health-check"
    Then the response content should be:
    """
    {
      "app":"imovit",
      "status":"ok",
      "rand":3
    }
    """