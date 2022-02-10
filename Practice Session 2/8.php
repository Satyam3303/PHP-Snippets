<?php
class MyCalculator {
private $var1, $var2;
public function __construct( $fval, $var2 ) {
$this->var1 = $fval;
$this->var2 = $var2;
}



public function addition() {
return $this->var1 + $this->var2;
}
public function subtraction() {
return $this->var1 - $this->var2;
}
public function multiplication() {
return $this->var1 * $this->var2;
}
public function division() {
return $this->var1 / $this->var2;
}
}
$mycalc = new MyCalculator(12, 6); 

echo $mycalc-> add()."\n";
echo $mycalc-> multiply()."\n"
echo $mycalc-> subtract()."\n";
echo $mycalc-> divide()."\n";
?>