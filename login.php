<?php include('retrieve.php');
if(!empty($_SESSION['username'])){
  header('location:profile.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>NeedIt</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="style/st.css">
<link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">
</head>
<body id="lg">
	<div class="lg-btn">
		<a href="index.html" class="brdr btn sz">Go Back</a>
	</div>
  <div class="login-page">
    <div class="form">
       <form class="register-form" action="data.php" method="post">
         <p class="message1">Register</p>
         <input type="text" placeholder="user-name" name="use">
         <input type="password" placeholder="password" name="pass">
         <input type="text" placeholder="email ID" name="eid">
         <input type="tel" placeholder="contact no" name="cno">
         <input type="number" placeholder="age" name="age">
         <input type="submit" value="Register" class="butt" name="register">
         <p >Already Registered? <a class="message" href="#">Log in</a></p>
       </form>
       <form class="login-form" action="retrieve.php" method="post">
         <p class="message1">Login</p>
         <input type="text" placeholder="user-name" name="use">
         <input type="password" placeholder="password" name="pas">
         <input type="submit" name="login" value="Login" class="butt">
         <p >Not yet Registered? <a  class="message" href="#">Register</a></p>
       </form>
    </div>
  </div>
  <script src="jquery.min.js">
  </script>
  <script>
    $('.message').click(function(){
    //$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    $(".register-form").toggle();
    $(".login-form").toggle();
    });
  </script>
</body>
</html>
