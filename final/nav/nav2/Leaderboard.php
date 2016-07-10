<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/leader/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/leader/style.css"> <!-- Resource style -->
	<script src="js/leader/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Leaderboard</title>
    <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd){background-color: black;
        color:white}
tr:nth-child(even){background-color: white;
        color:black}
th {
    background-color: #4CAF50;
    color: white;
}
</style>
 <!--nav-->
   
</head>
<body>
	<header class="cd-main-header">
		<a href="#0" class="cd-logo"><img src="img/cd-logo.svg" alt="Logo"></a>
		
		<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search...">
			</form>
		</div> <!-- cd-search -->

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="#0">Tour</a></li>
				<li><a href="#0">Support</a></li>
				<li class="has-children account">
					<a href="#0">
						<img src="img/cd-avatar.png" alt="avatar">
						Account
					</a>

					<ul>

						<li><a href="#0">My Account</a></li>
						<li><a href="#0">Edit Account</a></li>
						<li><a href="#0">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">Main</li>
				<li class="has-children overview">
					<a href="./myprogress.php">Overview</a>
					
					<ul>
						<li><a href="./Leaderboard.php">Leaderboard</a></li>
						<li><a href="./faq.php">User Forum</a></li><li><a href="./progress.php">My track</a></li>
						
					</ul>
				</li>
				<li class="has-children notifications active">
					<a href="#0">Notifications<span class="count">3</span></a>
					
					<ul>
						<li><a href="./myprogress.php">Courses</a></li>
						<li><a href="./challenge.php">Challenges</a></li>
						
					</ul>
				</li>

				<li class="has-children comments">
					<a href="#0">Courses</a>
					
					<ul>
						<li><a href="./allcourses.php">All Courses</a></li>
						<li><a href="./myprogress.php">My Courses</a></li>
						
					</ul>
				</li>
			</ul>

			<ul>
				<li class="cd-label">Secondary</li>
				<li class="has-children bookmarks">
					<a href="#0">Courses</a>
					
					<ul>
						<li><a href="./allcourses.php">Browse all Courses</a></li>
						<li><a href="./myprogress.php">Browsse my courses</a></li>
						
					</ul>
				</li>
				
				
			
			</ul>

			<ul>
				<li class="cd-label">Action</li>
				<li class="action-btn"><a href="#0">Report</a></li>
			</ul>
		</nav>
    <!--nav-->


		<div class="content-wrapper" >
            <h1 style="color:white"><b>LEADERBOARD</b></h1>
         <!-- <table>
  <tr>
    <th>BADGES</th>
    <th>USERNAME</th>
    <th>SCORE</th>
  </tr>
  <tr>
    <td></td>
    <td>Manvi</td>
    <td>99</td>
  </tr>
  <tr>
    <td></td>
    <td>Sindhura</td>
    <td>90</td>
  </tr>
  <tr>
    <td></td>
    <td>Pratheek</td>
    <td>84</td>
  </tr>
  <tr>
    <td></td>
    <td>Shreya</td>
    <td>83</td>
</tr>
</table> -->
<?php
   $dbhost = 'ec2-52-221-245-249.ap-southeast-1.compute.amazonaws.com:3306';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
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
<td>Employee name</td>
<td>Progress</td>
</tr>';
      
while($result=mysql_fetch_array($result1))
{
echo '<tr>
<td>'.$result["empid"].'</td>
<td>Employee '.$result["empid"].'</td>
<td>'.$result["enrollment.comp/courses.clen*100"].'</td>
</tr>';
}

echo '</table>';
  // }
?>



		</div> <!-- .content-wrapper -->
	</main><!-- .cd-main-content -->
<script src="js/leader/jquery-2.1.4.js"></script>
<script src="js/leader/jquery.menu-aim.js"></script>
<script src="js/leader/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
