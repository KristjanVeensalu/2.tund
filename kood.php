<?php
	$age=5;
	
	if ($age < 18) {
		echo "alaealine";
	} else {
		echo "t2isealine";
	}

?>

<br>

<?php
	for($i = 1; $i <= $age; $i=$i+1 ){
		echo $i."palju";
		
	}

	echo "onne";

?>

<br>

<?php

	echo date("d.m.Y - H:i:s");


?>