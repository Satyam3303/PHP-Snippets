<!DOCTYPE html>
<html>
<body>

<?php

$x="malayalam";
function checker($strings){

$y= strrev($strings);
if($strings==$y)
{echo "True";
}

else
{echo "False";
}

}
checker($x);

?>

</body>
</html>
