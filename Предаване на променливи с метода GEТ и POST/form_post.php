<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Попълнете данните</h1>
		<form action="form_post1.php" method="post">
			<p>Име: <input type="text" name="Fname"></p>
			<p>Фамилия: <input type="text" name="Lname"></p>
			<p>Факултетен номер: <input type="number" name="fnumber"></p>
			<p>Изберете специалност:</p> 
				<p><input type="radio" name="spec" value="Софт. инженерство" checked>Софтуерно инженерство</p>
				<p><input type="radio" name="spec" value="Информ. технологии">Информационни технологии</p>
				<p><input type="radio" name="spec" value="ИТИУ">Информ. технологии в икономиката и управлеието</p>
			<p><input type="submit" value="Изпрати"></p>
		</form>
	</body>
</html>