<?php
session_start();
$servername="localhost";
$dbusername="root";
$dbpassword="2614";
$dbname="needit";

$con=new mysqli($servername,$dbusername,$dbpassword,$dbname);
if($con->connect_error)
{
	die("Connection failed: ".$con->connect_error);
}
if(isset($_POST['login']))
{
	$username=$_POST['use'];
	$password=$_POST['pas'];

	$qry="SELECT * FROM `userdetail` WHERE `username`='$username' AND `password`='$password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if ($row<1) {
?>
		<script>
			alert("Data entered is incorrect.");
			window.open("login.php","_self");
		</script>
<?php
	}
	else{
		$data=mysqli_fetch_assoc($run);
		$_SESSION['username']=$data['username'];
		$_SESSION['email']=$data['emailid'];
		$_SESSION['contact']=$data['contact'];
		$_SESSION['age']=$data['age'];
		$_SESSION['success']="You are logged in.";
		header('location: profile.php');
	}
}
if (isset($_GET['logout'])) {
	# code...
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['email']);
	unset($_SESSION['contact']);
	unset($_SESSION['age']);
	unset($_SESSION['success']);
	header('location: start.html');
}
?>