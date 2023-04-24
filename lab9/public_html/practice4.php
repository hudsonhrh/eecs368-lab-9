<!DOCTYPE html>
<html>
<head>
	<title>multiplication table</title>
</head>
<body>
	<form method="post">
		<label>Enter a number for multiplication table: </label>
		<input type="number" name="num" required>
		<input type="submit" value="Generate Table">
	</form>
	<br>
	<?php

		if(isset($_POST['num'])) {
			$num = $_POST['num'];
			echo "<table border='1'>";
			echo "<tr><th>&nbsp;</th>";
			
			for($i=1; $i<=$num; $i++) {
				echo "<th>$i</th>";
			}
			echo "</tr>";
			
			for($i=1; $i<=$num; $i++) {
				echo "<tr><th>$i</th>";
				for($j=1; $j<=$num; $j++) {
					echo "<td>" . ($i * $j) . "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}
	?>
</body>
</html>

