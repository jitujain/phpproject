<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src= "reg.js"></script>
	<!-- script execute after java script is off done by browser -->
	<noscript>
		<style type = "text/css">
			#checkvalue {display:none;}
		</style>
		<div class = "noscriptmsg">
			You don't have javascript enabled.  Good luck with that.
			<br>
			Please Enable your java Sript.
		</div>
	</noscript>
</head>
<body >

	<!-- include header file-->

	<?php
	include 'header.html';
	?>
	<!-- designing code-->
	<div class = "formdes">
		<?php
		session_start();
		echo "uname is" . $_SESSION['uname2'];
		echo $_SESSION['uname2'];
		?>
		<div>
			<a href = "#" > Article </a >
				<a href = "content.php" > Content </a >
				<a href = "showArticle.php" > show old articles </a>
				</div>
				<p id = "formid"> <b>Please Create Your News Article Here</b> </p> 
				<form  action = "teach.php" method = "POST">
					<input type = "text" name = "title22" class = "titlebox" placeholder = "Enter Title "><br>
					<input type = "text" name = "article" class = "articlebox" placeholder = "Enter Article"><br>
					Private<input type = "radio" name = "status" value = "private">Public<input type = "radio" name = "status" value = "public"><br>
					<input type = "submit" name = "submit" value = "Login"  id = "loginid">

				</form>
				
			</div>
			<!-- include bottom file-->
			<?php
			include 'bottom.html';
			?>
		</div>
	</body>
	</html>