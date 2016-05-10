<?php

 #var_dump(function_exists('mysqli_connect'));

try{
$mysqli = mysqli_connect("localhost","root","bakersdozen","labgrid") or die("foo"); 
}
catch (Exception $e){
	echo "foo";
	echo $e;

}
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
}

$result = $mysqli->query('SELECT * FROM jobs;'); 

while($row = $result->fetch_array()) {

	echo '<tr>'.PHP_EOL;
    for ($i = 0; $i < count($row) && isset($row[$i]); $i += 1) {
    	echo '<td>'.$row[$i].'</td>'.PHP_EOL;
    }
    echo '</tr>'.PHP_EOL;
}
