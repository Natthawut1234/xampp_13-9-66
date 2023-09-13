<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "<h3><i>Hello World!!</i></h3>";
?>

<?php
$txt = "W3Schools.com";
echo "<h4>I love $txt!</h4>";
?>

<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>

</body>
</html>