<?php
	$dbc = mysqli_connect('Localhost', 'root', '', 'social_network')
	or die('Error connecting to MySQL server.');
	$query = "SELECT name FROM login WHERE slno ='1'";
	$result = mysqli_query($dbc, $query)
	or die('Error querying database.');
	$num_rows = mysqli_num_rows($result);
	if($num_rows > 0){
    while($row = $result->fetch_assoc()){
    	$email = $row['name'];
    }
}
    mysqli_close($dbc);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>table with db</title>
    <link rel="stylesheet" href="index.css">
    <style type = "text/css">
     table{
       border-collapse: collapse;
       width : 50%;
       font-family : monospace;
       font-size : 25px;
       align-items: left;
       font-style: italic;
      }
     td{
      background-color: transparent;
      color : blue; 
     }
    td : nth-child(even){
    	background-color: red}

   </style>
   </head>
   <body background="student_main.jpg" align="center">
		<div class="topnav">
  		<div class="topnav-right">
  			<a href="chat.php">Public chat</a>
    		<a href="post.php">Post</a>
    		<a href="student_profile.php">Profile</a>
    		<a href="student_login.html">log out</a>
        </div>
	</div>   
	<p></p><br/>
	<div style="color: blue;">
		<h1><i>welcome</i></h1>
	</div>
	<p></p><br/>
	 
 	<table>
	<?php 
  	$dbc = mysqli_connect('Localhost', 'root', '', 'social_network')
   	or die('Error connecting to MySQL server.');
  	$query = "SELECT name, email, phone, branch, year FROM student_details WHERE email = '$email'";
  	$result = mysqli_query($dbc, $query)
   		or die('Error querying database.');
  	$num_rows = mysqli_num_rows($result);
 	if($num_rows > 0){
    while($row = $result->fetch_assoc()){
    echo "<div class = 'loginbox'><tr><td>Name</td><td>". $row["name"]."</td></tr><tr><td>Email id</td><td>". $row["email"]."</td></tr><tr><td>Phone no</td><td>". $row["phone"]."</td></tr><tr><td>Branch</td><td>". $row["branch"]."</td></tr><tr><td>year</td><td>". $row["year"]."</td></tr></div>" ;
 	 }
  	echo "</table>";
  }
 	else{
  		echo " 0 result";
	}
	mysqli_close($dbc);
?>
	</table>
</body>
</html>