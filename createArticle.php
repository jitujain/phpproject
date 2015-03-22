<?php
  //manage the session
  include 'session.php';
?>
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
		//echo "uname is" . $_SESSION['uname2'];
		//echo $_SESSION['uname2'];
		?>
		<div class="subheader">
			<span style="color:#FACF1C;">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
			<a href="logout.php"><span class="logout">Logout</span></a>
			<a href = "teacher.php" > HOME </a>
			<a href = "content.php" >Create Content </a >
			<a href = "showArticle.php" > Show  Articles </a>
			<a href = "showContent.php" > Show  Contents </a>
		</div>
			<p id = "formid"> <b>Please Create Your News Article Here</b> </p> 
            <!-- design code for create article page-->
			<form  action = "teach.php" method = "POST">
				<input type = "text" name = "title22" class = "titlebox" placeholder = "Enter Title "><br>
				<textarea name = "article" class = "articlebox" placeholder = "Enter Article" rows="3" cols="25"></textarea><br>
				<span class = "selectRadio">Select Status Type</span>
				<span class = "statusText">Private<span><input type = "radio" name = "status" value = "private" class="radio" checked="checked">
				<span class = "statusText">Public</span><input type = "radio" name = "status" value = "public" class="radio"><br>
				<input type = "submit" name = "submit" value = "Login"  id = "loginid">
            </form>
				
	</div>
			<!-- include bottom file-->
	<?php
	  include 'bottom.html'; 
	?>

</body>
</html>