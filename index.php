

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<?php
echo "hello world";
echo "<br>";
?>

<?php
print "hello azad";
?>

<?php
$text = "<h2>we learn php whit vs code</h2>";
echo $text;
?>
<?php
$color1 = "red";
$color2 = "green";
$color3 = "blue";
$color4 = "yellow";
$color5 = "syen";
echo $color1;
echo "<br>";
echo $color2;
echo "<br>";
echo $color3;
echo "<br>";
echo $color4;
echo "<br>";
echo $color5;
echo "<br>";
echo "<br>";
echo "<br>";
?>
<?php
$azad = "god developer";
$love = "bangladesh";
$desh = "My country is ";

echo "azadkondoker is a" .$azad."";
echo "<br>";
echo "<br>";
echo "i love ".$love."";
echo "<br>";
echo "<br>";
echo "$desh  $love";
?>

<?php
$x = 5;
function myRule(){
}
myRule();
echo "<p>My class rule is $x</p>";
?>


<?php
$x = 5985;
$Y = "1020";
$z = 20.30;
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
var_dump($z);
echo "<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";

?>
<!-- math -->
<?php
echo (min(10,50,100,150,200,20,5,201,210,) . "<br>");
echo "<br>";
echo "squire of 64";
echo "<br>";
echo(sqrt(64));
echo "<br>";

?>

<?php
define("cars", ["azad","akif","shakib"]);
echo cars[0];
echo "<br>";
?> 
<?php
echo "100==100";
echo "<br>";
$x = 100;  
$y = "100";
var_dump($x == $y); 
echo "<br>";
?>  

<?php
$t = date("20");

if ($t < "22") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

</body>
</html>