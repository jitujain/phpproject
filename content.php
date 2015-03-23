<?php
  //manage the session
  include 'session.php';
?>
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

	<div class = "formdes" id="page">
		<?php
		session_start();
		//echo "uname is" . $_SESSION['uname2'];
		//echo $_SESSION['uname2'];
		?>
		<div class="subheader" >
			<span style="color:#FACF1C;">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
			<a href="logout.php"><span class="logout">Logout</span></a>
			<a href = "teacher.php" > HOME </a>
			<a href = "createArticle.php" >Create Article </a >
			<a href = "showArticle.php" > Show  Articles </a>
			<a href = "showContent.php" > Show  Contents </a>
		</div>

			<!-- content page design -->

		<p id = "formid"> <b>Please Create Your Content Here</b> </p> 
		<form  action = "addContent.php" method = "POST">
			<input type = "text" name = "title22" class = "titlebox" placeholder = "Enter Title "><br>
			<textarea name = "content" class = "articlebox" placeholder = "Enter Content" rows="3" cols="25"></textarea><br>
			<span class = "selectRadio">Select Status Type</span>
			<span class = "statusText">Private<span><input type = "radio" name = "status" value = "private" class="radio" checked="checked">
			<span class = "statusText">Public</span><input type = "radio" name = "status" value = "public" class="radio"><br>
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