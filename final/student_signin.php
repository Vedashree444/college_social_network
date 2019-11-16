<?php
 $email = $_POST['username'];
 $password = $_POST['password'];
 $num_rows = 0;
 $dbc = mysqli_connect('Localhost', 'root', '', 'social_network')
 or die('Error connecting to MySQL server.');
 
 $query = "SELECT name FROM student_details WHERE email = '$email' AND password = '$password'";
 $result = mysqli_query($dbc, $query)
 or die('Error querying database.');
 
 $num_rows = mysqli_num_rows($result);
 
 if($num_rows > 0){
 	$sql = "INSERT INTO login('name') VALUES('$email')";
	mysqli_query($dbc, $sql)
 		or die('Error quering database.');
  	echo "<script>alert('succefully logged in');document.location='student_main.html'</script>";
  }
 
 else
   echo 'check your user name and password';
	
  mysqli_close($dbc);
?>