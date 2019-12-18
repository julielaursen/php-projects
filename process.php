<html>

<body>

<?php
if(isset($_POST['submit']))
{
echo("Hello, " . $_POST['Name'] . ", your form has been submitted!<br>");
}
else
{
echo("Please make changes and submit the form.");
}
?>


Name: <?php echo $_POST['Name']; ?></br>
Password: <?php echo $_POST['Password']; ?> 
<br>

<?php
$myFile = fopen("mycontent.txt", "w") or die("<br><strong>Unable to open file: </strong>" .$myFile);
fwrite($myfile, $_POST['comments']);
fclose($myFile);
?>

<?php
echo readfile("mycontent.txt");
?>

</body>
</html>
