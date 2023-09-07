<?php

require_once __DIR__ . '/vendor/autoload.php';

use classes\Test;

class Main {
	
	public $testClass;
	
	public function __construct($testClass) {
		$this->testClass = new $testClass;
	}
	
	public function showTestClass() {
		echo "<pre>";
		var_dump($this->testClass);
		echo "</pre>";
	}
	
}

$main = new Main(Test::class);

$main->showTestClass();