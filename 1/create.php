<!doctype html>
<html lang="en" class="no-js">
<head>
    <style>
    #cent1 {
  position:absolute;
  top:30%;
  left:50%;
  margin-top:-50px; /* this is half the height of your div*/  
  margin-left:-100px; /*this is half of width of your div*/
        }
    
#cent {
  position:absolute;
  top:30%;
  left:50%;
  margin-top:-50px; /* this is half the height of your div*/  
  margin-left:-100px; /*this is half of width of your div*/
        }
    </style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="responsive-sidebar-navigation/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="responsive-sidebar-navigation/css/style.css"> <!-- Resource style -->
	<script src="responsive-sidebar-navigation/js/modernizr.js"></script> <!-- Modernizr -->
  	
</head>
<body>
	<header class="cd-main-header"
	</header> <!-- .cd-main-header -->
    
<div id="cent">
	<form action="manage.php">
    <h1>Course title </h1><br>
    <input type="text" name="txt1"><br><br>
    <h1> Description </h1><br>
    <textarea rows="12" cols="20"></textarea><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="upload">
	</form>
    </div>

<script src="responsive-sidebar-navigation/js/jquery-2.1.4.js"></script>
<script src="responsive-sidebar-navigation/js/jquery.menu-aim.js"></script>
<script src="responsive-sidebar-navigation/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>