<!DOCTYPE html>
<html>
<body>

<?php
class introd {
 
public $name;

function set_name($name) {
$this->name = $name;
}

function get_name() {
return $this->name;
}}


$x = new introd();
$x->set_name('Scott');

echo "Hello All, I am ".$x->get_name();
?>

</body>
</html>
