<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Connection</title>
</head>

<body>

<?php
$connect= mysql_connect ('localhost','amruldin','1!Afghanistan');

$database= mysql_select_db ('ahis');

if ($connect && $database)
{
}
else
{
	echo 'Not Connected';
}



?>
</body>
</html>