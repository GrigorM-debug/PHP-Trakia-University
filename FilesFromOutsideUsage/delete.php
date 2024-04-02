<?php include 'include/header.inc'?>
<?php include 'include/data.inc'?>
<!-- Header End -->
	<h3>Изтриване на данните на студент</h3>
	<table><tr>
	        <td><i>Име</i></td>
			<td><i>Фамилия</i></td>
			<td><i>Фак. номер</i></td>
			<td><i>Град</i></td>
			<td><i>Действие</i></td>
		   </tr>
	    <tr>
			<?php
				for($i=0;$i<count($arr);$i++){
					// echo "<td><i>". $arr[$i]["fname"] . "</i></td>"
					// ."<td><i>" . $arr[$i]["lname"] ."</i></td>"
					// ."<td><i>" . $arr[$i]["falkNumber"] . "</i></td>"
					// ."<td><i>" . $arr[$i]["city"] . "</i></td>";
					echo "<tr>"
					. "<td><i>". $arr[$i]["fname"] . "</i></td>"
					. "<td><i>" . $arr[$i]["lname"] ."</i></td>"
					. "<td><i>" . $arr[$i]["falkNumber"] . "</i></td>"
					. "<td><i>" . $arr[$i]["city"] . "</i></td>"
					. "</tr>";
				}
			?>
		</tr>
	</table>
</body>
</html>