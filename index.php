<!DOCTYPE html>
<html>
<body>



<?php
$myfile = fopen("courses.txt", "r") or die("Unable to open file!");
echo nl2br(fread($myfile,filesize("courses.txt")));
fclose($myfile);
?>



</body>
</html>