<?php
 $email = $_POST['username'];
 $num_rows=0;
 $dbc = mysqli_connect('Localhost', 'root', '', 'social_network')
 or die('Error connecting to MySQL server.'); 
 $query = "DELETE FROM student_details WHERE email='$email'";
 $result = mysqli_query($dbc, $query)
 	or die('Error querying database.');
  echo "<script>alert('Record deleted successfully');document.location='student.html'</script>";
  mysqli_close($dbc);
?>