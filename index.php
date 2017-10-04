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




?>
