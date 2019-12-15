<!doctype html>
<html lang=“en”>
<head>
<title>Sample PHP</title>
</head>
<body>
<?php 

$nameArray = array ("Mary" => 41, "Joe" => 35, "Amber" => 35, "Nisha" => 36, "Lacey" => 36);

ksort($nameArray);

foreach($nameArray as $key => $value)
echo $key. " is " .$value." years old<br />";

?>
</body>
</html>