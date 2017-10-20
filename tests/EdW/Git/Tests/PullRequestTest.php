<?php

namespace Edw\Git\Tests;

use Edw\Git\PullRequest;

class PullRequestTest extends \PHPUnit_Framework_TestCase {


  public function testCreate() {
    $payload = new \stdClass();

    $pr = PullRequest::create($payload);
    var_dump($pr);

    $this->assertTrue(true);
  }
}