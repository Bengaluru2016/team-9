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
//mysql_close($conn);
   $db=mysql_select_db('cfg',$conn);
   if(! $db) echo "No DB";
   session_start();
   
   //if($_SERVER["REQUEST_METHOD"] == "POST") {
      $courseid = "2";
      
      $sql = "select count(empid) from enrollment where cid='$courseid' group by cid";
      $result1 = mysql_query($sql);
      $result=mysql_fetch_array($result1);
      
      echo '<p>'.$result["count(empid)"].'</p>';
      
  // }
?>


