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
      $myusername = "1";
      $mypassword = "password1"; 
      
      $sql = "SELECT des FROM emplist WHERE empid = '$myusername' and passwd = '$mypassword'";
      $result = mysql_query($sql);
      $row = mysql_fetch_array($result);
      $active = $row['des'];
      
      $count = mysql_num_rows($result);
      
      if($count == 1) {
         echo $active;
         
      }else {
         echo "Failed";
      }
  // }
?>
