<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	<?php
		if (empty($_GET["name"]) || empty($_GET["lname"])) {
			echo "Не сте въвели име!<br><a href=\"form_get.php\">Назад</a>";
		} else {
			$FirstName=$_GET["name"];
			$LastName = $_GET["lname"];
			echo "Вашето име е, ".$FirstName . " " .$LastName;
		}

		// if (empty($_GET["lname"])) {
		// 	echo "Не сте въвели фамилия!<br><a href=\"form_get.php\">Назад</a>";
		// } else {
		// 	$LastName = $_GET["lname"];
		// 	echo "Вашата фамилия е, ".$LastName;
		// }
	?>
</body>
</html>