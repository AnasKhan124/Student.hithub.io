<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style type="text/css">
		body{
			background-color:#00A9FF;
		}
		form{
			border:1px solid gray;
			background-color: wheat;
			 margin-right:auto;
			 margin-left:auto;
			 border-radius:20px;
			 width:400px;
			 height:600px;
		}
		img{
			width:200px;
			height:200px;
			margin-right:auto;
			margin-left:auto;
			display: block;
			border-radius:100px;
		}
		input[type=text], input[type=password],input[type=submit]{
			margin:10px 10px 0 15px;
			width:350px;
			padding:7px;
			border-radius: 5px;

		}
		b{
			margin: 10px;


		}
	</style>

</head>
<body>
	<form  method="post" action="databaseconectivity" >
		<h1 style="text-align: center">Registration Form</h1>
		<img src="img/user.png">
		<input type="text" name="fname" placeholder="First Name " ><br>
		<input type="text" name="lname" placeholder="Last Name "><br>
		<input type="text" name="em" placeholder="Enter Email"><br>
		<input type="password" name="pass" placeholder="Password"><br>
		<input type="password" name="pass" placeholder="Re-type Password"><br>
		<b>Gender</b> <input type="radio" name="r">Male<input type="radio" name="r">Female<br>
		<b>Country</b>
		<select name="c">
			<option>Afghanistan</option>
			<option>India</option>
			<option>Pakistan</option>
			<option>Turkey</option>
		</select>
		<input type="submit" name="" value="Register" style="background-color:green; color:white">
	</form>

</body>
</html>