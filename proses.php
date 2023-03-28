<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
</head>
<body>
	<form method="post">
		<input type="number" name="num1">
		<select name="operator">
			<option value="tambah">+</option>
			<option value="kurang">-</option>
			<option value="kali">*</option>
			<option value="bagi">/</option>
		</select>
		<input type="number" name="num2">
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
		if(isset($_POST['submit'])){
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operator = $_POST['operator'];

			switch($operator){
				case "tambah":
					$result = $num1 + $num2;
					break;
				case "kurang":
					$result = $num1 - $num2;
					break;
				case "kali":
					$result = $num1 * $num2;
					break;
				case "bagi":
					$result = $num1 / $num2;
					break;
			}

			echo "<br>Hasil perhitungan adalah: ".$result;
		}
	?>
</body>
</html>