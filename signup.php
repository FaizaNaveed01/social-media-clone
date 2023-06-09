<!DOCTYPE html>
<html>

	<head>
	<title>ChitChat</title>
	</head>

	<style>

body{
	background-color: #FFEBCC;
}

#container {
width:1150px;
margin:auto;
}

#container a {
text-decoration:none;
}

#container a:hover {
color:#ff0000;
}

.sign-in-form {
width:1150px;
margin:auto;
}

.sign-in-form h1 {
color:#D98999;
text-shadow:2px 2px 2px #000000;
margin:auto;
}

.sign-in-form h2 {
color:#D98999;
text-shadow:2px 2px 2px #000000;
margin-left:120px;
}

.sign-in-form b {
color:#000000;
margin-left:780px;
}

.sign-in-form strong {
margin-left:210px;
}

.sign-in-form  hr{
width:410px;
float:left;
}

.sign-in-form label {
color:#000000;
font-size:19px;
font-weight:bold;
}

.form-1 {
width:300px;
text-indent:5px;
height:25px;
font-size:19px;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
-o-border-radius:5px;
}

.form-2 {
width:60px;
text-indent:5px;
height:25px;
font-size:19px;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
-o-border-radius:5px;
}

.btn-sign-in {
color:#000000;
font-size:19px;
width:200px;
line-height:30px;
background-color:#FAC0C0;
border:2px solid #EDABBA;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
margin-left:210px;
}

.btn-sign-in:hover {
color:black;
background-color:#EDABBA;
border:2px solid #D98999;
}

.btn-sign-up {
color:#ffffff;
font-size:19px;
width:100px;
line-height:30px;
background-color:#0bacff;
border:2px solid #0bacff;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

.btn-sign-up:hover {
color:#ffffff;
font-size:19px;
width:100px;
line-height:30px;
background-color:#0488cd;
border:2px solid #0488cd;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

.sign-up-form-1 {
width:700px;
background-color:#FAC0C0;
margin:auto;
}

.sign-up-form-1 table {
width:100%;
background-color:#FFEBCC;
margin:auto;
}

.sign-up-form-1 legend {
font-size:30px;
font-weight:bold;
}
	</style>

<body>

	<div id="container">
		<div class="sign-in-form">
		<center>	
			<h1>Welcome to ChitChat</h1>
			<h1> Where You Can Chit And Chat! </h1>
		</center>

			<h2>Sign up</h2>
			<b>Fill Carefully!</b>
		<br />
		
		<fieldset class="sign-up-form-1">
		<form method="post" action="signup_form.php" enctype="multipart/form-data">
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>First Name*</label></td>
					<td><label>Last Name*</label></td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" placeholder="Enter Your First Name" class="form-1" title="Enter Your First Name" required /></td>
					<td><input type="text" name="lastname" placeholder="Enter Your Last Name" class="form-1" title="Enter Your Last Name" required /></td>
				</tr>
				<tr>
					<td><label>User Name*</label></td>
					<td><label>Repeat User Name*</label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Enter Your User Name" class="form-1" title="Enter Your User Name" required /></td>
					<td><input type="text" name="username2" placeholder="Enter Your User Name Again" class="form-1" title="Enter Your User Name" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: Your User Name Should Be Unique!</td>
				</tr>
			</table>
		</fieldset>
		
		<br />		
		
		<fieldset class="sign-up-form-1">
			<legend>Personal Information</legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Date Of Birth</label></td>
					<td>
					<select name=day style="font-size:18px;" required>
					<?php

					$day=1;
					while($day<=31)
					  {
					  echo "<option> $day
					  </option>";
					  $day++;
					  }
					?>
					</select>
					<select name=month style="font-size:18px;" required>
						<option>January</option>
						<option>Febuary</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					<select name=year style="font-size:18px;" required>
					<?php
					$year=1990;
					while($year<=2014)
					  {
					  echo "<option> $year
					  </option>";
					  $year++;
					  }
					?>
					</select>
					</td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td>
					<label>Male</label><input type="radio" name="gender" value="male" required />
					<label>Female</label><input type="radio" name="gender" value="female" required />
					</td>
				</tr>
				<tr>
					<td><label>Mobile Number*</label></td>
					<td><input type="text" name="number" placeholder="009715..." maxlength="13" class="form-1" title="Enter Your Mobile Number" required /></td>
				</tr>
			</table>
		</fieldset>
		
		<br />
		
		<fieldset class="sign-up-form-1">
			<legend>Log In Information*</legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Email Address*</label></td>
					<td><label>Repeat Email Address*</label></td>
				</tr>
				<tr>
					<td><input type="text" name="email" placeholder="Enter Your Email Address" class="form-1" title="Enter Your Email Address" required /></td>
					<td><input type="text" name="email2" placeholder="Enter Your Email Address Again" class="form-1" title="Enter Your Email Address Again" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: Your Email Address Should Be Unique!</td>
				</tr>
				<tr>
					<td><label>Password*</label></td>
					<td><label>Repeat Password*</label></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Enter Your Password" class="form-1" title="Enter Your Password" required /></td>
					<td><input type="password" name="password2" placeholder="Enter Your Password Again" class="form-1" title="Enter your Password Again" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: Your Password Should Be Unique And Safe With You!</td>
				</tr>
			</table>
		</fieldset>
		
		<br />
		
			<strong>"Yes, I have read and I accept the <a href="#">ChitChat Terms of Use</a> and the <a href="#">ChitChat Privacy Statement</a>."</strong>
			
		<br />
		<br />
			<input type="submit" name="submit" value="I Agree - Let's Go!" class="btn-sign-in" title="Log in" />
		</form>
		
		</div>
	</div>

</body>

</html>