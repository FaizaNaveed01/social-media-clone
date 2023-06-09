<!DOCTYPE html>
<html>

	<head>
		
	<title>ChitChat</title>
	</head>

	<style>
		body {
			background-color: #FAC0C0;

}

#container {
width:850px;
margin:auto;

}

.sign-in-form {
width:500px;
margin-top:180px;
}

.sign-in-form h1 {
color:#D98999;
text-shadow:2px 2px 2px #000000;
}

.sign-in-form h2 {
color:#D98999;
text-shadow:2px 2px 2px #000000;
margin-left:150px;
}

.sign-in-form  hr{
width:410px;
float:left;
}

.sign-in-form label {
color:#000000;
font-size:19px;
font-weight:bold;
margin-right:30px;
}

.form-1 {
	background-color:#FFEBCC;
width:300px;
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
width:100px;
line-height:30px;
background-color:#FFEBCC;
border:2px solid #EDABBA;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

.btn-sign-in:hover {
color:#ffffff;
background-color:#EDABBA;
border:2px solid #EDABBA;
}

.btn-sign-up {
color:black;
font-size:19px;
width:100px;
line-height:30px;
background-color:#EDABBA;
border:2px solid #EDABBA;
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
background-color:#D98999;
border:2px solid #D98999;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

	</style>

<body>

	<div id="container">
		<div class="sign-in-form">
			<table>
			<h1> Welcome To ChitChat, </h1> 
			<h1> Where You Can Chit And Chat! </h1>

			<h2>Log in</h2>
	<form method="post" action="signin_form.php" enctype="multipart/form-data">

				<tr>
				<td><label>Email</label></td>
				<td><input type="email" name="email" placeholder="Enter email" class="form-1" title="Enter email!" required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" placeholder="Enter password" class="form-1" title="Enter password!" required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>		
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="submit" value="Log in" class="btn-sign-in" title="Log in" />
					<input type="reset" name="cancel" value="Cancel" class="btn-sign-up" title="Cancel" />
					</td>
				</tr>
	</form>
			</table>
		
		</div>
	</div>

</body>

</html>