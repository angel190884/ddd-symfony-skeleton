Feature: Create new latency log
  Para revizar que la platform cree nuevos registros de latencia en BD

  Scenario: A valid non existing latency
    Given I send a PUT request to "/latencies/01ac7588-6439-409b-b524-968da5ec5aed" with body:
    """
    {
      "timestamp" = "2021-04-06 09:25:32",
      "timestamp_message" = "2021-04-06 09:25:32.723000",
      "timestamp_json" = "2021-04-06 09:25:32.749000",
      "timestamp_send" = "2021-04-06 09:25:32.749000",
      "timestamp_ack" = "2021-04-06 09:25:32.749000",
    }
    """
    Then the response status code should be 201
    And the response should be empty