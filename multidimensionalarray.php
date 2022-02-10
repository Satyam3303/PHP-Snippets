<!DOCTYPE html>
<html>
<body>

<?php
$x=array(

array(1,"abc",40000),
array(2,"def",50000),
array(3,"ghi",60000)
);

for($row=0;$row<3;$row++){
for($col=0;$col<3;$col++){
echo $x[$row][$col]." ";}

echo </br>;
}

?>

</body>
</html>
