<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$FirstName = $_POST["Fname"];
			$LastName = $_POST["Lname"];
			$Specialnost = $_POST["spec"];
			$FalkNumber = $_POST["fnumber"];

			if (empty($FirstName) || empty($LastName)) {
				echo "Не сте въвели име!";
			} else {
				echo "Здравейте, ".$FirstName." ".$LastName. ", факултетен номер: " .$FalkNumber ." от специалност " .$Specialnost. "!<br>";
			}
		?>
	<br><a href="form_post.php">Ново въвеждане</a>
</body>
</html>
