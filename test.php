 <!DOCTYPE html>
<html>
<body>

<?php
function myfunction($v)
{
	if (in_array("Dog",$v)){
    	echo "<b>Match Found</b>";
    }
}

$a=array("Horse","Dog","Cat");

myfunction($a);

?>

</body>
</html>
