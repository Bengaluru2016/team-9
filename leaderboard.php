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
      
      $sql = "select enrollment.empid, enrollment.comp/courses.clen*100 from courses,enrollment where enrollment.cid=courses.cid and enrollment.cid='$courseid' order by comp DESC";
      $result1 = mysql_query($sql);
      
echo '<table>
<tr>
<td>Employee id</td>
<td>Progress</td>
</tr>';
      
while($result=mysql_fetch_array($result1))
{
echo '<tr>
<td>'.$result["empid"].'</td>
<td>'.$result["enrollment.comp/courses.clen*100"].'</td>
</tr>';
}

echo '</table>';
  // }
?>


