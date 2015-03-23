<?php
  //manage the session
  include 'session.php';
?>
<html>
<head>
	<title>showArticle page</title>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src = "reg.js"></script>
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

<body>


	<!--include the header file -->
	<?php
	include 'header.html';
	?>
	<!--login form -->
	<div class = "formdes" id="page">
	<?php session_start(); ?>
	<div class="subheader">
		<span class="subheaderwc">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
		<a href="logout.php"><span class="logout">Logout</span></a>
		<a href = "teacher.php" > HOME </a>
		<a href = "content.php" >Create Content </a >
		<a href = "createArticle.php" >Create Article </a >
		<a href = "showArticle.php" > Show  Article </a>
	</div>
		<?php
		  include 'fetchContent.php';
		?>
	</div>
	<!--include the bottom file -->
	<?php
	include 'bottom.html';
	?>
</body>
</html>
