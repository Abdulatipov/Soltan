<?php
	class A{
	}
	class B{
	public a;
	public b;
	function __construct($a,$b){
		$this->a = $a;
		$this->b = $b;
	}
}
$a=new B(new A(), new B(new A(), new A()));