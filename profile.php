<?php include('retrieve.php');

if(empty($_SESSION['username'])){
	header('location:login.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>NeedIt</title>
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" href="style/st.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">
</head>
<body id="profile">
	<div class="pos">
		<h1>User Detail</h1>
		<div class="overlay">
			<img src="images/user_male2-512.png">
			<?php if (isset($_SESSION['username'])):?>
			<p><?php echo $_SESSION['success'];?></p>
			<p>User name: <?php echo $_SESSION['username']; ?></p>
			<p>Email Id: <?php echo $_SESSION['email'];?></p>
			<p>Contact No: <?php echo $_SESSION['contact'];?></p>
			<p>Age: <?php echo $_SESSION['age'];?></p>	
			<a href="profile.php?logout='1'" class="brdr btn sz">Logout</a>
			<a href="start.html" class="brdr btn sz">Home</a>
			<?php endif ?>
		</div>
	</div>
<div id="particles-js"></div>
<script src="script/particles.js"></script>
<script src="script/app.js"></script>


</body>
</html>