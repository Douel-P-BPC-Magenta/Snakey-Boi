	<html>
	<head>
	<title>Snakey Boi</title>
	</head>
	<body>
	<?php
	$fName=rand(1,6);
	
		if ($fName == "1") {
	echo "Almost Snake Eyes";
	}
	elseif
	($fName == "6") {
	echo "Winner";
	}
	else
	{
	echo "Get good noob";
	}
	echo "<br><br>";
		
	switch ($fName) {
    case 1:
        echo "You rolled a 1";
        break;
			
    case 2:
        echo "You rolled a 2";
        break;
			
    case 3:
        echo "You rolled a 3";
        break;	
			
   case 4:
        echo "You rolled a 4";
        break;
			
   case 5:
        echo "You rolled a 5";
        break;
			
    case 6:
        echo "You rolled a 6";
        break;	
	}
	
	echo "<br><br>";
	echo "I'm 0";
	echo "<br><br>";
$sum = 0;
	while ($sum<100){
		++$sum; 
		echo "Ive added another one, i'm now: $sum <br>";
	}
echo "Finished";
	?>
</body>
</html>

