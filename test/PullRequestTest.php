<?php

namespace Tests\Edw;

use Edw\Git\PullRequest;

class PullRequestTest extends \PHPUnit_Framework_TestCase {

  public function testCreate() {
    $payload = json_decode(file_get_contents(__DIR__ . '/../fixtures/github_pull_request.json'));
    $pr = PullRequest::create($payload);
    $this->assertNotNull($pr);
  }
}
