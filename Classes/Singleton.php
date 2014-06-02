<?php
$s = Singleton::getInstance();
//var_dump($s);
print $s->sayHello();

class Singleton {

	private static $instance;

	private function __construct() {}

	public static function getInstance() {

		if (!isset(self::$instance)) {
			$c = __CLASS__;
			self::$instance = new $c;
		}

		return self::$instance;
	}

	public function sayHello() {
		echo "Hello World!!\n";
	}

}