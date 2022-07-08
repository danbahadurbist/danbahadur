<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="Dan Bahadur.jpg" rel='icon'>
	<link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<title>Responsive Login And Register Form</title>
	<link rel="icon" href="R.png">
	
</head>
<style>
.hsubs{
	text-decoration: none;
  font-size:40px;
  font-family: monospace;
  justify-content: top;
}
.headersite{
 justify-content: top;
 justify-items:top;
 text-align:left;
 float: left;
 color: blanchedalmond;
 background-color: rgb(56, 49, 49);
 margin-left: 10px;
 font-family: Arial, Helvetica, sans-serif;
 font-size: 2em;
}
.wrapper{
	float: left;
}
.socal{
	size:8vh;
	justify-content: center;
	justify-items: center;
	text-align: center;
	margin-top:2em;
}
</style>
<body>
	<div class="container">
		<form action="login.php" class="login active" method="post">
			<h2 class="title">Login with your account</h2>
			  <div class="form-group">
				  <label for="email">Email</label>
				   <div class="input-group">
					   <input type="email" id="email" placeholder="Email address" name="logemail">
					<i class='bx bx-envelope'></i>
				  </div>
			    </div>
			 <div class="form-group">
			<label for="password">Password</label>
		<div class="input-group">
	<input type="password" pattern=".{8,}" id="password" placeholder=" Enter Your password" name="logpassword">
<i class='bx bx-lock-alt' ></i>
</div>
<span class="help-text">At least 8 characters</span>
</div>
<button type="submit" class="btn-submit" name="submit">Login</button>
	    <a href="#"><a href="#" onclick="switchForm('forgot', event)">Forgot password ?</a></a>
 <p>I don't have an account. <a href="#" onclick="switchForm('register', event)">Register</a></p>
 <div class="socal">
	<a href="https://www.facebook.com/Danbahadur2020/"><i class="fab fa-facebook-f"></i></a>
	<a href="https://www.youtube.com/channel/UChwZArF8GgfUo8m6o4yjMEQ"><i class=" fab fa-brands fa-youtube"></i></a>
	<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
	<a href="https://www.instagram.com/danbahadurbist"><i class="fab fa-instagram"></i></a>
	<a href="https://www.gmail.com/danbahadur2060@gmail.com"><i class="fab fa-linkedin-in"></i></a>
	<a href="https://www.github.com/Danbahadur2020.com"><i class=" fab  fa-brands fa-github"></i></a>
	<a href="https://codepen.io/trending"><i class=" fab fa-brands fa-codepen"></i></a>
 </div>
</form>

<form action="register.php" class="register" method="POST">
   <h2 class="title">Register your account</h2>
	 <div class="form-group">
	   <label for="email">Email</label>
		 <div class="input-group">
			<input type="email" id="email" placeholder="Email address" name="email">
			  <i class='bx bx-envelope'></i>
				</div>
			     </div>
			      <div class="form-group">
				     <label for="password">Password</label>
					<div class="input-group">
				   <input type="password" pattern=".{8,}" id="password" placeholder="Your password" name="password">
				 <i class='bx bx-lock-alt' ></i>
			   </div>
			<span class="help-text">At least 8 characters</span>
		</div>
	  <div class="form-group">
	<label for="confirm-pass">Confirm password</label>
  <div class="input-group">
<input type="password" id="confirm-pass" placeholder="Enter password again"name="conpassword">
<i class='bx bx-lock-alt' ></i>
</div>
	<span class="help-text">Confirm password must be same with password</span>
</div>
 <button type="submit" class="btn-submit" name="submit">Register</button>
	<p>I already have an account. <a href="#" onclick="switchForm('login', event)">Login</a></p>
	<div class="socal">
		<a href="https://www.facebook.com/Danbahadur2020/"><i class="fab fa-facebook-f"></i></a>
		<a href="https://www.youtube.com/channel/UChwZArF8GgfUo8m6o4yjMEQ"><i class=" fab fa-brands fa-youtube"></i></a>
		<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
		<a href="https://www.instagram.com/danbahadurbist"><i class="fab fa-instagram"></i></a>
		<a href="https://www.gmail.com/danbahadur2060@gmail.com"><i class="fab fa-linkedin-in"></i></a>
		<a href="https://www.github.com/Danbahadur2020.com"><i class=" fab  fa-brands fa-github"></i></a>
		<a href="https://codepen.io/trending"><i class=" fab fa-brands fa-codepen"></i></a>
	</div>
</form>
</div>

<form action="forgot.php" class="forgot" method="POST">
	<h2 class="title">Forgot Password</h2>
	  <div class="form-group">
		  <div class="input-group">
			 <input type="email" id="email" placeholder="Email address" name="foremail">
			   <i class='bx bx-envelope'></i>
				 </div>
				  </div>
				   <div class="form-group">
					 <div class="input-group">
				  <i class='bx bx-lock-alt' ></i>
				</div>
		 </div>
	   <div class="form-group">
   <div class="input-group">
 <i class='bx bx-lock-alt' ></i>
 </div>
 </div>
  <button type="submit" class="btn-submit" name="submit">Send Code</button>
  <p>I don't have an account. <a href="#" onclick="switchForm('register', event)">Register</a></p>
  <div class="socal">
	<a href="https://www.facebook.com/Danbahadur2020/"><i class="fab fa-facebook-f"></i></a>
	<a href="https://www.youtube.com/channel/UChwZArF8GgfUo8m6o4yjMEQ"><i class=" fab fa-brands fa-youtube"></i></a>
	<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
	<a href="https://www.instagram.com/danbahadurbist"><i class="fab fa-instagram"></i></a>
	<a href="https://www.gmail.com/danbahadur2060@gmail.com"><i class="fab fa-linkedin-in"></i></a>
	<a href="https://www.github.com/Danbahadur2020.com"><i class=" fab  fa-brands fa-github"></i></a>
	<a href="https://codepen.io/trending"><i class=" fab fa-brands fa-codepen"></i></a>
  </div>
 </form>
 </div>
<script src="form.js"></script>
</body>
</html>

