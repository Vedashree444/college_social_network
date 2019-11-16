<?php
$message = $_POST['message'];

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
$sql = "INSERT INTO chat(sender, message, cdate) VALUES('$email','$message', NOW())";
if (mysqli_query($dbc, $sql)) {
      echo "<script>alert('message sent');document.location='chat.php'</script>";
}
else{
     echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
}
mysqli_close($dbc);
?>