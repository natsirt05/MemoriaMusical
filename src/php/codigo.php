<!DOCTYPE html>
<html>
<?php 
$fp = fopen('../data/case.txt', 'w');
$txt = echo $_POST["codigo"];
fwrite($fp, $txt);
?>
</html>