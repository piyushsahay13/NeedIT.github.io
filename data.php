<?php
$servername="localhost";
$dbusername="root";
$dbpassword="2614";
$dbname="needit";
$un=$_POST['use'];
$pa=$_POST['pass'];
$ed=$_POST['eid'];
$con=$_POST['cno'];
$ag=$_POST['age'];
echo $un; 
echo $pa; 
echo $ed; 
echo $con; 
echo $ag;
$conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);
if($conn->connect_error)
{
	die("Connection failed: ".$conn->connect_error);
}
if(empty($un))
{
		echo "User-name cannot be left blank.";
		die();
}
if(empty($pa))
{
		echo "Password required.";
		die();
}
if(empty($ag))
{
		echo "Age required.";
		die();
}
if(empty($ed))
{
		echo "EmailID required.";
		die();
}
if(empty($con))
{
		echo "Contact Number required.";
		die();
}
$sql="insert into userdetail (username,password,emailid,contact,age) values ('".$un."','".$pa."','".$ed."','".$con."','".$ag."')";
if($conn->query($sql)==TRUE)
{
	?>
	<script>
	alert("Thankyou for registering with us!!...Have a great browsing.");
	window.open("login.php","_self");
	</script>
	<?php
}
else
{
	echo "Error!! ". $sql ."<br>". $conn->error;
}
$conn->close();
?>
