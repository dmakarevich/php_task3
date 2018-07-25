<?php

class Line {
  private $p1;
  private $p2;


  public function __construct($p1, $p2) {
    $this->p1 = $p1;
    $this->p2 = $p2;
  }


  public function getP1()
  {
    return $this->p1;
  }

  public function setP1($p1): void
  {
    $this->p1 = $p1;
  }

  public function getP2()
  {
    return $this->p2;
  }

  public function setP2($p2): void
  {
    $this->p2 = $p2;
  }


}