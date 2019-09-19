<!DOCTYPE html>
<html>

<head>
	<title>TeamRocket | SignUp</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/	bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="http://fonts.googleapis.com/css?family=roboto">
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css">
</head>

<body>
	<div class="container-fluid row">
		<div class="col-md-6 left-pane">
			<div id="team-roc-txt">TeamRocket
				<div id="dot"></div>
			</div>
			<center>
				<img style="width:90%" src="https://res.cloudinary.com/okafohenrie/image/upload/v1568773421/Illustration_eg8fta.png" id="illustration " class="ill-img">
				<span class="ilstn-txt1">
					<div id="grp-dsc-txt1" class="grp-dsc-txt1">Group Discussions</div>
					<div id="grp-dsc-txt2" class="grp-dsc-txt2">
						Communicative situation that Allows Its Participant To Share Their Views And Opinions
					</div>
				</span>
			</center>
		</div>
		<div class="col-md-6 right-pane">
			<div class="right" id="right">
				<div class="create-acct">
					<h2> Create Account </h2>
					<div>
						<div class="form-container">
							<form action="controllers/signup_handler.php" method="POST">

								<label for="fname" id="fname-lb">Full Name</label><br>
								<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter your full name" required>
								<br>
								<label for="email" id="email-lb">Email Address</label><br>
								<input type="email" name="email" id="email" class="form-control" placeholder="Email@example.com"  required>
								<br>
								<label for="password" id="psd-lb">Create Password</label><br>
								<input type="password" name="password" id="password" class="form-control psd" placeholder="Enter your password"  required>
								<br>
								<label for="conf_password" id="conf-psd-lb">Confirm Password</label><br>
								<input type="password" name="conf_password" id="conf_password" class="form-control" placeholder="Enter your password again"  required>
								<br>

								<div class="t-c">
									<input type="checkbox" name="t-c" id="t-cr">
									I agree to the <span id="tpp">Terms, Privacy Policy</span> and <span id="con">Conditions</span>
								</div>


								<center>
									<input type="submit" value="Signup" id="signup-btn" class="btn btn-info">
								</center>

								<p class="login-msg-link">
									<span id="loginmsg"> Already have an account?</span>
									<a href="index.php" id="loginlink">Log in</a>
									<p>
							</form>
						</div>
					</div>
				</div>
			</div>
</body>

</html>