<?php 
	if (isset($_GET ['customer'])) 
	{
		if ($_GET ['customer']== "read")
		{
			include 'content/read.php';
		}
	}
	else{
		include 'content/dashboard.php';
	}
?>