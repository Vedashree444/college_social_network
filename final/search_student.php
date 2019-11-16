<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>student</title>
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
		}
		.header{
			width: 100%;
			height: 1000px;
			background-size: cover;
		}
		.navbar{
			width: 100%;
			padding: 20px;
			position: fixed;
			top: 0px;
			transition: .5s;

		}
		.navbar ul li{
			list-style-type: none;
			display: inline-block;
			padding: 10px 50px;
			color: white;
			font-size: 24px;
			font-family: sans-serif;
			cursor:pointer;
			border-radius: 10px;
			transition: .5s;
		}
		.navbar ul li:hover{
			background: orange;
		}
		a{
  			color: black;
		}
	</style>
</head>
<body background="admin_login.jpg">
	<div class="header">
		<div class="navbar">
			<ul>
				<li><a href="admin_main.html">Home</a></li>
				<li><a href="student_view.php">View</a></li>
				<li><a href="student_delete.php">Delete</a></li>
				<li><a href="student_search.php">Search</a></li>
				<li><a href="student_login.html">Log Out</a></li>
			</ul>	
		</div>
	</div>
	<form>
		<label>Enter user name</label>
		<input type="text" name="email" required placeholder="name@site.com">
	</form>

</body>
</html>




