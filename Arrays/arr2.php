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
$arr=array("fname" => "Иван",
			"midname" => "Николаев",
			"lname" => "Георгиев", 
			"city" => "Пловдив");

echo "<table>
	<tr>
		<th>Име</th>
		<th>Презиме</th>
		<th>Фамилия</th>
		<th>Град</th>
	</tr>
	<tr>";

foreach($arr as $key=>$val){
	echo "<th>". $val . "</th>";
}

echo "</tr></table>";
?>
</body>
</html>