<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("courses.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

<?php/*
$myfile = fopen("courses.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("courses.txt"));
fclose($myfile);
*/?>



</body>
</html>