<?php
 error_reporting(0);
?>

<?php
	$dbc = mysqli_connect('Localhost', 'root','','social_network')
 		or die('Error connecting to MySQL server.');
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "student/".$filename;
	move_uploaded_file($tempname, $folder);
	

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

  	$query = "INSERT INTO post(image,sender,cdate) VALUES('$folder','$email',NOW())";
  	mysqli_query($dbc, $query)
   		or die('Error querying database.');
	if(mysqli_close($dbc))
		echo "<script>alert('message sent');document.location='display.php'</script>";
	else
		echo "error";
?>

