<?php

namespace App\Test;

class Sub {
  protected int $num;

  public function __construct(int $num) {
    $this->num = $num;
  }

  public function sub() {
    return intval($this->num)+5;
  }
}