<?php

class Singleton {
  public $data;

  private function __construct() {
    $this->data = rand();
  }

  private static $instance = null;
  public static function getInstance() {
    if(is_null(self::$instance)) {
      self::$instance = new self;
    }

    return self::$instance;

  }

  private function __clone() {}
  private function __wakeup() {}

}

$randOne = Singleton::getInstance();
$randTwo = Singleton::getInstance();

echo $randOne->data;
echo "<br>";
echo $randTwo->data;
echo "<br>";
