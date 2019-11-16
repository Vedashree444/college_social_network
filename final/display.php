<head>
	<title>chat</title>
	<link rel="stylesheet" type="text/css" href="display.css">
</head>
<body>
	<div class="topnav">
  		<div class="topnav-right">
  			<a href="chat.php">Public chat</a>
    		<a href="post.php">Post</a>
    		<a href="student_login.html">log out</a>
        </div>
	</div> 
	<?php
	$dbc = mysqli_connect('Localhost', 'root','','social_network')
 		or die('Error connecting to MySQL server.');
 	$query = "SELECT image, sender, cdate FROM post";
  	$result = mysqli_query($dbc, $query)
   		or die('Error querying database.');
  	$num_rows = mysqli_num_rows($result);
 	if($num_rows > 0){
    while($row = $result->fetch_assoc()){
    echo 	"<h3><i>".$row["sender"]."</i></h3><div class='container darker'><p><a href=".$row["image"]."><img src='".$row["image"]."'/><p><span class='time-right'>".$row["cdate"]."</span></div>";
    	}
    }
    else
    	echo "START POSTING";
    		mysqli_close($dbc); 
?>
	<form action = "post.php" method="post" enctype="multipart/form-data" >
		<input type="file" name="uploadfile" value=""/>
		<input type="submit" name="submit" value="post">
	</form>
</body>
</html>