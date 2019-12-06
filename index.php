<?php
ini_set("display_errors",1);error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("abdulatipov/abdulatipovException.php");
include_once("abdulatipov/Linear.php");
include_once("abdulatipov/Square.php");
include_once("abdulatipov/Log.php");
$co_arr = [];
foreach(["a", "b", "c"] as $co) {
	echo "Enter ".$co.": ";
	$line = stream_get_line(STDIN, 1024, PHP_EOL);
	$co_arr[$co] = $line === "" ? 0 : $line;
}
$a = $co_arr["a"];
$b = $co_arr["b"];
$c = $co_arr["c"];
//abdulatipov\Log::log("Entered numbers: " . implode(", ", $co_arr));
try {
	abdulatipov\Log::log("Equation: $a*x^2 + $b*x + $c = 0");
	//$s = new abdulatipov\Square($a, $b, $c);	
	abdulatipov\Log::log("roots: " . implode(" ", abdulatipov\Square::_C()->solve($a, $b, $c)));
	
	/*	
	if (is_array($roots)) {
		abdulatipov\Log::log("two roots");
		abdulatipov\Log::log("roots: " . $roots[0] . " " . $roots[1]);
	} else {
		abdulatipov\Log::log("one root");
		abdulatipov\Log::log("root: " . $roots);
	}
	*/
}catch(abdulatipov\abdulatipovException $ex) {
	abdulatipov\Log::log($ex->getMessage());
}

abdulatipov\Log::write();
?>
