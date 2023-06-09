<!DOCTYPE html>
<html>

	<head>
		<title>ChitChat</title>
	</head>

		<style>
		body {
  background-color: black;
		}

#header {
background-color:#EDABBA;
width:100%;
margin-top:-8px;
}

.head-view {
margin:auto;
width:1000px;
line-height:50px;
}

.head-view ul {
width: 1000px;
margin: auto;
}

.head-view  li {
display: inline;
color: #fff;
margin: 0px 80px 0px 5px;
}

.head-view b {
color:#ffffff;
text-shadow:3px 3px 3px #000000;
font-size:50px;
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
background-color:#D98999;
border:2px solid #D98999;
}

#container {
width:1200px;
margin:auto;
}

.image-display {
width:850px;
margin:auto;
}

.img-style {
width:110%;
height:130%;
}
</style>

<body>
	<div id="header">
		<div class="head-view">
			<ul>
				<li><b>ChitChat</b></li> 	
				<li></li>
				<li style="font-size: x-large">Where You Can Chit And Chat!</li>
				<li></li>
				<li></li>
				<li></li>
					</ul>
		</div>
	</div>


	<ul>
	<center><li><a href="signin.php" title="Sign in"><button class="btn-sign-in" value="Sign in">Sign in</button></a> 	
	<li></li>
	<a href="signup.php" title="Sign up"><button class="btn-sign-up" value="Sign up">Sign up</button></a></li></center>

	<li></li>
		
</ul>

	<div id="container">
		<div class="image-display">
			<img src="image/picture.png" class="img-style" />
		</div>
	</div>

</body>

</html>