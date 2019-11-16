<!DOCTYPE html>
<html>
<head>
	<title>stduens</title>
	<link rel="stylesheet" type="text/css" href="student.css">
	<style type = "text/css">
    table{
       border-collapapse : collapse;
       width : 100%;
       color : red;
       font-family : monospace;
       font-size : 25px;
       text-align : left; 
      }
    th{
      background-color: blue;
      color : white; 
     }
    tr : nth-child(even){
   	background-color: #f2f2f2;
    }  
    body{
      background-image: url(senior_view.jpg);
    }       
  </style>
</head>
<body>
<div class="topnav">
  		<div class="topnav-right">
  		  <a href="admin_main.html">Home</a>
        <a href="senior_view.php">View</a>
        <a href="senior_add.html">Add</a>
        <a href="senior_delete.html">Delete</a>
        <a href="senior_search.html">Search</a>
        <a href="admin_signin.html">Log Out</a>
      </div>
	</div>
	<h1><i>Senior Details</i></h1> 
<table>
	<tr></tr>
    <tr>
    <th>Name </th>
    <th>email id </th>
    <th>Phone no </th>
    <th>stream </th>
    <th>batch </th>
  </tr>
<?php 
 $dbc = mysqli_connect('Localhost', 'root','','social_network')
 or die('Error connecting to MySQL server.');
  	$query = "SELECT name, email, phone, stream, batch FROM senior_details";
  	$result = mysqli_query($dbc, $query)
   		or die('Error querying database.');
  	$num_rows = mysqli_num_rows($result);
 	if($num_rows > 0){
    while($row = $result->fetch_assoc()){
    echo "<tr><td>". $row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["stream"]."</td><td>".$row["batch"]."</td>";
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