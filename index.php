<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Assignment 3</title>
	
</head>

<body>

<h2>Part 1</h2>
<?php
		//Part 1
function isBitten(){
	$bitten = rand(0,1);
	if($bitten == 0){
		return FALSE;
	}
	else if ($bitten == 1){
		return TRUE;
	}
}

$ate = isBitten();
if ($ate == TRUE){
	echo "Charlie ate my lunch!";
}
else if ($ate == FALSE){
	echo "Charlie did <b>not</b> eat my lunch";
}
?>
<br><hr>
<h2>Part 2</h2>

<div class = "part2">

<table>
<?php
		//Part 2
for ($i = 0; $i < 7; $i++) {
	echo "<tr>";
	for ($j = 0; $j < 7; $j++) {
		echo "<td></td>";
	} 
	echo "</tr>";
} 
?>
</table>
</div>
<br><hr>
<h2>Part 3</h2>

<?php
		//Part 3

$months = array ('January', 'February', 'March', 'April',
 'May', 'June', 'July', 'August',
 'September', 'October', 'November', 'December'); 
 
for ($i = 0; $i < count($months); $i++) {
    echo $months[$i] . "<br>";
} 
echo "<br>";
sort ($months);

for ($i = 0; $i < count($months); $i++) {
    echo $months[$i] . "<br>";
}

$months = array ('January', 'February', 'March', 'April',
'May', 'June', 'July', 'August',
'September', 'October', 'November', 'December'); 
echo "<br>";

//foreach
foreach ($months as $month){
	echo $month . "<br>";
}
echo "<br>";
sort ($months);
foreach ($months as $month){
	echo $month . "<br>";
}
?>
<br><hr>
<h2>Part 4</h2>

<?php
		//Part 4
$restaurants = array   ("Chama Gaucha" => "40.50",
						"Aviva by Kameel" => "15.00",
						"Bone's Restaurant" => "65.00",
						"Umi Sushi Buckhead" => "40.50",
						"Fandangles" => "30.00",
						"Capital Grille" => "60.50",
						"Canoe" => "35.50",
						"One Flew South" => "21.00",
						"Fox Bros. BBQ" => "15.00",
						"South City Kitchen Midtown" => "29.00",
						);
?>

<table>

	<?php 
	foreach ($restaurants as $restaurant => $price){
		echo "<tr><td>".$restaurant."</td><td>".$price."</td><tr>";
	}

	?>
</table>
<br>
<p>Sort alphabetically</p>
<?php 
		//Part 4 (part 2)

function sortByName($arr){
	ksort($arr);
	echo "<table>";
	foreach ($arr as $key => $value){
		echo "<tr><td>".$key."</td><td>".$value."</td><tr>";
	}
	echo "</table>";
}


function sortByPrice($arr){
	asort($arr);
	echo "<table>";
	foreach ($arr as $key => $value){
		echo "<tr><td>".$key."</td><td>".$value."</td><tr>";
	}
	echo "</table>";
}

sortByName($restaurants);
echo "<br><p>Sort by price</p>";
sortByPrice($restaurants);

?>


</body>
</html>