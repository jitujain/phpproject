<?php
/**
*session restore
*user can not access this page by typeing url directly
*user must be login for access the this page
*/
session_start();
$uemail = $_SESSION['email2'];
$upass = $_SESSION['password2'];
if( empty($uemail) || empty($upass))
{
	header('location:index.php');
}
?>
<html>
<head>
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
<body >

	<!-- include header file-->
    
	<?php
	include 'header.html';
	?>
	<!-- designing code-->
	<div class = "formdes">
		<a href = "showArticle.php" > show  Articles </a>
		<a href = "showContent.php" > show  Contents </a>
	</div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="logout.php"><span style="text-decoration:none">Logout</span></a>
	<!-- include bottom file-->
	<?php
	include 'bottom.html';
	?>

</body>
</html>