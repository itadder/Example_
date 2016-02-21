!/usr/bin/php
<?php
$uname = $argv[1];
$pass = $argv[2];
$database = 'HRAttendanceTracker';
$db = new mysqli('localhost',$uname,$pass,$database);

if ($db->connect_errno > 0)
{ 
	echo __File__.":".__Line__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
	exit(0);
}

echo "attempting to connect to database".PHP_EOL;
$queryString = "select * from employees;";
$results = $db->query($queryString);
print_r($results);
$db->close();
echo "DB Connection Success".PHP_EOL;

?>

