<!DOCTYPE html>
<html>
<body>

<?php
$d1=date_create("1981-11-04");
$d2=date_create("2013-09-04");

$interval = date_diff($d1, $d2);
echo $interval->format('%R%y years %m months %d days');
?>

</body>
</html>
