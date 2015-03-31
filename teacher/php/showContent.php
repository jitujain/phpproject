<?php
  //manage the session
  include '../../common/php/session.php';
?>
<html>
<head>
	<title>showContent page</title>
	<link rel = "stylesheet" type = "text/css" href = "../../common/css/ind.css">
	<link rel = "stylesheet" type = "text/css" href = "../../common/css/head_bottom.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src = "../../common/js/reg.js"></script>
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
	include '../../common/html/header.html';
	?>
	<!--login form -->
	<div class = "formdes" id="page">
	<?php session_start(); ?>
	<div class="subheader">
		<span class="subheaderwc">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
		<a href="../../common/php/logout.php"><span class="logout">Logout</span></a>
		<a href = "../../common/php/redirect.php?utype=<?php echo $_SESSION['utype2'] ?>" > Home </a>
		<a href = "../../common/php/showArticle.php" > Show  Article </a>
	</div>
		<?php
		  include 'fetchContent.php';
		?>
	</div>
	<!--include the bottom file -->
	<?php
	include '../../common/html/bottom.html';
	?>
</body>
</html>
