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
      "latency_message_json" = "26.00",
      "latency_json_send" = "0.00",
      "latency_send_ack" = "0.00",
      "latency_message_send" = "26.00",
      "latency" = "2021-04-06 09:25:32",
      "json" = "{"date":{"date":"2021-04-06 09:25:32.000000","timezone_type":3,"timezone":"UTC"},"timestamps":{"message":"2021-04-06 09:25:32.723000","json":"2021-04-06 09:25:32.749000","send":"2021-04-06 09:25:32.749000","ack":"2021-04-06 09:25:32.749000","latency_message_json":26,"latency_json_send":0,"latency_send_ack":0,"latency_message_send":26,"latency":26}}"
    }
    """
    Then the response status code should be 201
    And the response should be empty