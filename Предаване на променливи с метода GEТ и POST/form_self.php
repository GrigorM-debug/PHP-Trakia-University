<!DOCTYPE HTML>  
<html>
<head></head>
<body>  
<?php 
	// Инициализация на променливи
	$fname = $lname = $fnumber = $address = "";
    $gender = "жена";	
	// Проверка на използван метод POST
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $fnumber = $_POST["fnumber"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        echo "<h2>Въведохте следната информация:</h2>";
        echo "Име: ".$fname;
        echo "<br>";
        echo "Фамилия: ".$lname;
        echo "<br>";
        echo "Факултетен номер: ".$fnumber;
        echo "<br>";
        echo "Пол: ".$gender;
        echo "<br>";
        echo "Адрес: ".$address;
		echo "<p><a href=\"".$_SERVER["PHP_SELF"]."\" style='text-decoration:none;'>Към нов запис >></а></p>";
	} else {
	// Извежда се формата
	  ?>
	  <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">  
  	  	Име: <input type="text" name="fname" value="<?php echo $fname;?>">
   	  	<br><br>
  	  	Фамилия: <input type="text" name="lname" value="<?php echo $lname;?>">
   	  	<br><br>
  	  	Фак. номер: <input type="text" name="fnumber" value="<?php echo $fnumber;?>">
  	  	<br><br>
  	  	Пол:
  	  	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="жена") echo "checked";?> value="жена">жена
  	  	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="мъж") echo "checked";?> value="мъж">мъж
   	  	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="друго") echo "checked";?> value="друго">друго  
   	  	<br><br>
  	  	Адрес: <textarea name="address" rows="5" cols="40"><?php echo $address;?></textarea>
  	  	<br><br>
  	  	<input type="submit" name="submit" value="Запис">  
	  </form>
	  <?php
	}
?>
</body>
</html>