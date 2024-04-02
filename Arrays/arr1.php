<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<style>
table, td, th {
  border: 1px solid #dddddd;
  border-radius: 10px;
  padding: 6px;
}
</style>
<body>
<?php
$arr=array(1,2,3,4,5,6,7,8,9);
$arrTwo = array(10, 11, 12, 13, 14, 15, 16);

echo "<table><tr>";
for ($i=0; $i<count($arr); $i++){
	echo "<th>". $arr[$i] ."</th>";
}
echo "</tr></table>";

echo "<table><tr>";
for($i = 0; $i < count($arrTwo); $i++){
  echo "<td>" . $arrTwo[$i] . "</td>";
} 
echo "</tr></table>";
?>
</body>
</html>