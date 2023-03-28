<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assesment</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" name="num1">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value=""></option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" name = "submit" value="submit">    
    </form>
</body>
</html>

<?php
    if (isset($_POST["submit"])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        if ($operator == '+') {
            $result = $num1 + $num2;
        } elseif ($operator == '-') {
            $result = $num1 - $num2;
        } elseif ($operator == '*') {
            $result = $num1 * $num2;
        } elseif ($operator == '/') {
            $result = $num1 / $num2;
        } else {
            $result = 0;
        }

       echo "<h2>Hasil Perhitungan Adalah</h2>";
       echo "<p>{$num1} {$operator} {$num2} = {$result}</p>";
   }
   ?>