<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	<?php
		$teacher=$_GET["name"];
		$discip=$_GET["lang"];
		echo "Вие избрахте да учите <b>".$discip."</b><br>с преподавател <b>".$teacher."</b>";
	?>
		<p>
			<a href="lang.php">Назад</a>
		</p>
	</body>
</html>