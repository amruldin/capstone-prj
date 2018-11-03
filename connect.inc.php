<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Connection</title>
</head>

<body>

<?php
$connect= mysql_connect ('');

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
