<?php
include "color_palette.php";

$mysqli = new mysqli('localhost','root','bakersdozen','labgrid');
$result = $mysqli->query('SELECT location FROM ip_addresses;');
$rows = array();
while ($row = $result->fetch_array()) $rows[count($rows)] = $row[0];

$location_count = array_count_values($rows);

$color_selection = array_rand($color_palette, count($location_count));
$i = 0;
echo 'var usage_data = ['.count($location_count).'];'.PHP_EOL;
foreach ($location_count as $key => $value) {
    echo "\t".'usage_data['.$i.'] = {'.PHP_EOL;
    echo "\t\t".'value: '.$value.','.PHP_EOL;
    echo "\t\t".'color: "'.$color_palette[$color_selection[$i]].'",'.PHP_EOL;
    echo "\t\t".'label: "'.$key.'"'.PHP_EOL;
    echo "\t".'}'.PHP_EOL;
    $i += 1;
}
