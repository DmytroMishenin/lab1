<?php
require_once __DIR__ . "/Computer.php";

$computer = new Computer();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab1</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="processor" placeholder="Процессор">
    <input type="submit"><br>
</form>
<br>
<form action="" method="post">
    <select name="software">
        <option value="Google Chrome">Google Chrome</option>
        <option value="Opera">Opera</option>
        <option value="FireFox">FireFox</option>
    </select>
    <input type="submit"><br>
</form>
<br>
<form action="" method="post">
    <input hidden name="guarantee">
    <input type="submit" value="Проверить гарантию"><br>
</form>
<br>
<?php
if (isset($_POST["processor"])) {
    $computer->processor();
} elseif (isset($_POST["software"])) {
    $computer->software();
}elseif (isset($_POST["guarantee"])) {
   $computer->guarantee();
}
?>
</body>
</html>

