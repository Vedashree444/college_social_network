<!DOCTYPE html>
<html>
<head>
	<title>stduens</title>
	<link rel="stylesheet" type="text/css" href="student.css">
	<style type = "text/css">
    table{
       border-collapapse : collapse;
       width : 100%;
       color : #d96459;
       font-family : monospace;
       font-size : 25px;
       text-align : left; 
      }
    th{
      background-color: #d96459;
      color : white; 
     }
    tr : nth-child(even){
   	background-color: #f2f2f2;
    }         
  </style>
</head>
<body>
<div class="topnav">
  		<div class="topnav-right">
  			<a href="admin_main.html">Home</a>
			<a href="student_view.php">View</a>
			<a href="student_delete.html">Delete</a>
			<a href="student_search.html">Search</a>
			<a href="student_login.html">Log Out</a>
        </div>
	</div>
	<h1>Student Details</h1> 
<table>
	<tr></tr>
    <tr>
    <th>Name </th>
    <th>email id </th>
    <th>Phone no </th>
    <th>branch </th>
    <th>year </th>
  </tr>
<?php
	$email = $_POST['username'];
	$dbc = mysqli_connect('Localhost', 'root','','social_network')
      or die('Error connecting to MySQL server.');
    $query = "SELECT name, email, phone, branch, year FROM student_details WHERE email= '$email'";
  	$result = mysqli_query($dbc, $query)
   		or die('Error querying database.');
  	$num_rows = mysqli_num_rows($result);
 	if($num_rows > 0){
    while($row = $result->fetch_assoc()){
    echo "<tr><td>". $row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["branch"]."</td><td>".$row["year"]."</td>";
 	 }
 	 echo "</table>";
    }
 	else{
  		echo " 0 result";
  		echo "</table>";
	}
		mysqli_close($dbc); 
?>
</body>
</html>