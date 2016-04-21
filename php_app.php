<?php
	$text = array();
	for($i=0; $i<5; $i++)
	{
		$text[$i]= "Hello World " . ($i+1)."<br>";
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Getting started with github</title>
</head>
<body>
	<ul>
		<?php 
			for($i=0; $i<5; $i++)
			{
				echo "<li>".$text[$i] ."</li>";
			}
		?>
	</ul>
</body>
</html>