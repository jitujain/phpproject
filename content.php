<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src = "reg.js"></script>
	<!--noscript code  -->
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
	<!-- include hearder file -->
	<?php
	include 'header.html';
	?>

	<div class = "formdes">
		<?php
		session_start();
		echo "uname is" . $_SESSION['uname2'];
		echo $_SESSION['uname2'];
		?>
		<div>
			<!-- content page design -->
		</div>
		<p id = "formid"> <b>Please Create Your Content Here</b> </p> 
		<form  action = "addContent.php" method = "POST">
			<input type = "text" name = "title22" class = "titlebox" placeholder = "Enter Title "><br>
			<input type = "text" name = "article" class = "articlebox" placeholder = "Enter Article"><br>
			Private<input type = "radio" name = "status" value = "private">Public<input type = "radio" name = "status" value = "public"><br>
			<input type = "submit" name = "submit" value = "Login"  id = "loginid">
		</form>
	</div>
	<!-- include the bottom file -->
	<?php
	include 'bottom.html';
	?>
</div>
</body>
</html>