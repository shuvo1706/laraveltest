<?php
$host = "localhost";
$dbuser = "root";
$pass = "";
$dbname = "sign up";
$conn = mysqli_connect($host,$dbuser,$pass,$dbname);
if (mysqli_connect_errno()) {
 die("Connection Failed! " . mysqli_connect_error());
}
else {
 echo "Connected to database {$dbname}";
}

if (isset($_POST['submit'])){


	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	if ($Name==' ')
	{
		echo "<script>alert('enter your name')</script>";

	}
	if ($Email==' ')
	{
		echo "<script>alert('enter your Email')</script>";

	}
	if ($Password==' ')
	{
		echo "<script>alert('enter your Password')</script>";

	}
	else{

		$query="insert into signingup(Name,Email,Password)
		values ('$Name','$Email','$Password')";
		$conn->query($query);
				echo "<script>alert('you are successfully registered')</script>";
			    	echo "<script>window.open('/home','_self')</script>";


	}
}
?>
<?php
require_once('header.php');
?>


<!doctype html>
<html>
<head>

<title> stackoverflowbuet </title>

</head>
<body>

<div id="loginn">

  <form action="{{URL::to('/tag')}}" method="POST">
{{csrf_field()}}


      <label for="fname">first_name</label>
    <input type="text" id="fname" name="first_Name" placeholder="john cena">
	<br>
	<br>
  <label for="fname">last_name</label>
<input type="text" id="lname" name="last_Name" placeholder="john cena">
<br>
<br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="You@example.org">
	<br>
	<br>

	  <label for="pass">Password</label>
    <input type="password" id="pass" name="password" placeholder="********">
	<br>
	<br>
  <input type="submit" name="submit" value="submit" >


</div>

   {{ Form::close() }}

</body>
</html>
