<?php
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$stream = $_POST['stream'];
$phone = $_POST['phone'];
$batch = $_POST['batch'];
$dbc = mysqli_connect('Localhost', 'root', '', 'social_network')
or die('Error connecting to MySQL server.');
$sql = "INSERT INTO senior_details(name, email, phone, stream, batch, password) VALUES('$name','$email','$phone','$stream','$batch','$password')";
if (mysqli_query($dbc, $sql)) {
      echo "<script>alert('Successfully registered');document.location='admin_main.html'</script>";
}
else{
     echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
}
mysqli_close($dbc);
?>