#!/usr/bin/php
<?php
$fname = $argv[1];
$mname = $argv[2];

$lname = $argv[3];

$db = new mysqli('localhost','someuser','somepassword','HRAttendanceTracker');

if ($db->connect_errno)
{
    echo __FILE__.":".__LINE__.": failed to connect to db, re: $db -> connect_error".PHP_EOL;
    exit(0);
}

echo "attempting to insert record: $fname, $mname, $lname".PHP_EOL;

$insertString = "insert into employees(fname,mname,lname) values ('$fname','$mname','$lname');";
echo "attempting to excute this SQL:".PHP_EOL;
echo $insertString.PHP_EOL;
$results = $db->query($insertString);

$queryString = "select * from employees;";

$results = $db->query($queryString);

print_r($results);
while ($obj = $results->fetch_object())
{

    print_r($obj);
}

# when you are done using the database connection, close it.

$db->close();
echo "DB Connection Success".PHP_EOL;

?>
