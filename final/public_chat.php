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
  </head>
  <body background="student_main.jpg" align="center">
		<div class="topnav">
  		<div class="topnav-right">
  			<a href="chat.php">Public chat</a>
    		<a href="post.php">Post</a>
    		<a href="student_signin.html">log out</a>
        </div>
	</div>  
    <?php
      $dbc = mysqli_connect('Localhost', 'root', '', 'social_network')
        or die('Error connecting to MySQL server.');
      $query = "SELECT sender, message, cdate FROM chat"
       or die('Error quesring database');
      $result = mysqli_query($dbc, $query)
      or die('Error querying database.');
    $num_rows = mysqli_num_rows($result);
    if($num_rows > 0){
     while($row = $result->fetch_assoc()){
     echo "<p>". $row["sender"]."</p><p>".$row["message"]."</p><p>".$row["cdate"]."</p>" ;
     }
  }
  else{
      echo " 0 result";
  }
  mysqli_close($dbc);
?>
  </table>
</body>
</html>