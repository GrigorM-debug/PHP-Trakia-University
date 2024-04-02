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
$arr=array(
		["fname"=>"Стоян", "mname" => "Николаев", "lname"=>"Иванов", "city"=>"Асеновград"],
		["fname" => "Георги", "mname" => "Петров", "lname" => "Иванов", "city" => "Пловдив"],
		["fname" => "Васил", "mname" => "Георгиев", "lname" => "Петров", "city" => "София"],
		["fname" => "Георги", "mname" => "Тодоров", "lname" => "Стоянов", "city" => "София"],	
		["fname" => "Стоян", "mname" => "Иванов", "lname" => "Димитров","city" => "Пловдив"]
		);
		
echo "<table><tr><th>Име</th><th>Презиме</th><th>Фамилия</th><th>Град</th</i></tr>";

for($i=0;$i<count($arr);$i++){
	echo "<tr><th>". $arr[$i]["fname"] . "</th><th>". $arr[$i]["mname"] ."</th><th>". $arr[$i]["lname"] . "</th><th>" . $arr[$i]["city"] . "</th></tr>";
}

echo "</table>";
?>
</body>
</html>