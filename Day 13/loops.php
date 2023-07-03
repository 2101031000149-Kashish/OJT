<!-- If loop -->
<?php
echo "If loop"
?>
<?php
echo "<br>";
$t = date("H");
if ($t < "20") {
  echo "Good Morning";
}
echo "<br>";
echo "<br>";
?>

<!-- If..Else..loop -->
<?php
echo "If.. Else..loop"
?>
<?php
echo "<br>";
$t = date("H");
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br>";
echo "<br>";
?>

<!-- While loop -->
<?php
echo "While loop"
?>
<?php
echo "<br>";
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
echo "<br>";
?>


<!-- Do..While loop -->
<?php
echo " Do..While loop"
?>
<?php
echo "<br>";
$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
echo "<br>";
?>

<!-- Foreach loop -->
<?php
echo " Foreach loop"
?>
<?php
echo "<br>";
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo "$value <br>";
}
?>
