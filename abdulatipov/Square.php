<?php
namespace abdulatipov;
// ���������� ��������� ax^2+bx+c
class Square extends Linear implements \core\EquationInterface{
	public static function _C(){
		return new self();
	}
	protected $c;
	protected $x2;
	protected function dir($a, $b, $c) {
		$dir = $b*$b - 4*$a*$c;
		return $dir;
	}
	function solve($a, $b, $c) {
		
		if($a == 0){
		   return array($this->ur($b,$c));
		}
		$dir = sqrt($this->dir($a, $b, $c));
		if ($dir > 0) {				
			$x = (-1*$b + ($dir))/(2*$a);
			$x2 = (-1*$b - ($dir))/(2*$a);
			$this->x = $x;
			$this->x2 = $x2;
			return array($x, $x2);
		} elseif ($dir ==0) {
			$x = (-1*$b)/(2*$a);
			$this->x = $x;
			return array($x);
		}
		throw new abdulatipovException("no solutions");
	}
}
?>