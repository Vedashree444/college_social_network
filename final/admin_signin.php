<?php
$name = $_POST['username'];
$password = $_POST['password'];
$num_rows = 0;
$dbc = mysqli_connect('Localhost', 'root', '', 'social_network')
 or die('Error connecting to MySQL server.');
 
$query = "SELECT name FROM admin WHERE name = '$name' AND password = '$password'";
$result = mysqli_query($dbc, $query)
 or die('Error querying database.');
 
$num_rows = mysqli_num_rows($result);
 
 if($num_rows > 0)
   {	
   	echo "<script>alert('succefully logged in');document.location='admin_main.html'</script>";
   	
   }
else  
  echo 'check your user name and pasword';

$query = "UPDATE login SET name = '$email' WHERE slno = '$n'";
$result = mysqli_query($dbc, $query)
or die('Error querying database');

 mysqli_close($dbc);
?>