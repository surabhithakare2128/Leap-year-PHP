<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br><br>Replacing '-' with '/' in " . $date . "<br>";
$date =  date('Y/m/d', time());
echo $date . "<br><br>";

echo "The result of the comparision is: <br>";

if(strcmp($date, $tar) > 0){
	echo "The future";
}
elseif(strcmp($date, $tar) < 0){
	echo "The past";
}
else{
	echo "Oops";
}

echo "<br><br>The position of '/' is: <br>";

$last = 0;
$position = array();
$find = "/";

while (($last = strpos($date, $find, $last))!== false) {
	$position[] = $last;
        $last = $last + strlen($find);
}

foreach ($position as $value) {
	echo $value ." ";
}

echo "<br><br>The number of words in " . $date . " are: <br> ";
echo str_word_count($date);

echo "<br><br>The length of " . $date . " is: <br>";
echo strlen($date);

echo "<br><br>The ascii value of first character of  " . $date . " is: <br>";
echo ord($date);

echo "<br><br>The last two characters of  " . $date . " is: <br>";
echo substr($date, -2);

echo "<br><br>The results after breaking " . $date . " into array is: <br>";
$arr = explode("/", $date);
echo implode($arr, ' ');

echo "<br><br>";
echo "The years in the array are: <br>";
foreach ($year as $value){
	echo  $value . " ";
}

echo "<br><br>";

foreach ($year as $i){
	if((0 == $i % 4) and (0 != $i % 100) or (0 == $i % 400)){
		echo "$i is  true i.e it is a leap year ";	
	}
	else{
		echo "$i is false i.e it isn't a leap year ";
	}
}



?>
