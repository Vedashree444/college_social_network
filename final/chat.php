<!DOCTYPE html>
<html>
<head>
	<title>chat</title>
	<link rel="stylesheet" type="text/css" href="chat.css">
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
      $dbc = mysqli_connect('Localhost', 'root', '', 'social_network')
        or die('Error connecting to MySQL server.');
      $sql = "SELECT name FROM login WHERE slno='1'"
       or die('Error quering database');
      $result = mysqli_query($dbc, $sql)
       or die('Error queing database');
       $num_rows = mysqli_num_rows($result);
      if($num_rows > 0){
        while($row = $result->fetch_assoc()){
          $email = $row["name"];
        }
      }
      $query = "SELECT sender, message, cdate FROM chat"
       or die('Error quering database');
      $result = mysqli_query($dbc, $query)
      or die('Error querying database.');
    $num_rows = mysqli_num_rows($result);
    if($num_rows > 0){
     while($row = $result->fetch_assoc()){
    echo "<h3><i>".$row["sender"]."</i></h3><div class='container darker'><p>".$row["message"]."</p><span class='time-right'>".$row["cdate"]."</span></div>";
    }
    }

      
  else{
      echo " 0 result";
  }

  mysqli_close($dbc);
?>
<div class="container">
	<form method="post" action="send.php">
	<textarea type="text" id="message" name="message" rows= "2" cols = "85" placeholder="type message here...." /></textarea>
	<input align="right" type="submit" name="submit" value="Send"/>	
</form>
</div>
</body>
</html>
