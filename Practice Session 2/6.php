<!DOCTYPE html>
<html>
<body>

<?php

$date =  new DateTime('now' , new DateTimeZone('Asia/Kolkata'));
echo "The 1st time is ";
print_r($date);
$date2 = new DateTime('tomorrow');
echo "</br></br>The 2nd time is ";
print_r($date2);
echo "</br></br>";
echo "The Difference is->"
$diff= $date->diff($date2);
print_r($diff);

?>

</body>
</html>