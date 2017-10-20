<?php

namespace Edw\Git;

class PullRequest {

  private $action = null;
  private $url = null;

  private $branch = null;
  private $sha = null;


  public static function create(\stdClass $payload) {
    $ob = new PullRequest();
    $ob->setAction($payload->action);
    $ob->setUrl($payload->pull_request->url);
    $ob->setUrl($payload->pull_request->url);
    $ob->setBranch($payload->head->ref);
    $ob->setSha($payload->head->sha);
    return $ob;
  }


  /**
   * @return null
   */
  public function getAction() {
    return $this->action;
  }

  /**
   * @param null $action
   */
  public function setAction($action) {
    $this->action = $action;
  }

  /**
   * @return null
   */
  public function getUrl() {
    return $this->url;
  }

  /**
   * @param null $url
   */
  public function setUrl($url) {
    $this->url = $url;
  }

  /**
   * @return null
   */
  public function getBranch() {
    return $this->branch;
  }

  /**
   * @param null $branch
   */
  public function setBranch($branch) {
    $this->branch = $branch;
  }

  /**
   * @return null
   */
  public function getSha() {
    return $this->sha;
  }

  /**
   * @param null $sha
   */
  public function setSha($sha) {
    $this->sha = $sha;
  }
}