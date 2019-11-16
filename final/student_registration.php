<?php
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$phone = $_POST['phone'];
$year = $_POST['year'];
$dbc = mysqli_connect('Localhost', 'root', '', 'social_network')
or die('Error connecting to MySQL server.');
$sql = "INSERT INTO student_details(name, email, phone, branch, year, password) VALUES('$name','$email','$phone','$branch','$year','$password')";
if (mysqli_query($dbc, $sql)) {
      echo "<script>alert('Successfully registered');document.location='sudent_login.html'</script>";
}
else{
     echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
}
mysqli_close($dbc);
?>