<?php
$dbhost = 'ec2-52-221-245-249.ap-southeast-1.compute.amazonaws.com:3306';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($conn);
?>
