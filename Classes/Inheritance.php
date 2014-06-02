<?php
$p1=new ProductA("reza");
$p2=new ProductB("rouzbeh");
$p1->printInfo();
$p2->printInfo();
var_dump($p1);
var_dump($p2);
echo "Printing constant variable: ".Product::author."\n";

abstract class Product {
	const author = 'reza';
}

class ProductA extends Product {
	
	public $title;

	function __construct($title){
		$this->title = $title;
	}

	function __destruct() {
		print "Destroying " . $this->title . "\n";
	}

	function printInfo(){
		print "Product::Info called.\n";
	}

	protected function testProtected(){
		print "Testing a protected method.\n";
	}

}

class ProductB extends ProductA{

	public $info;

	function __construct($title){
		parent::__construct($title);
		$this->info = "A diversion";
	}

	function printInfo(){
		print "ProductA::Info called.\n";
		parent::printInfo();
	}
}

