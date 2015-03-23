<?php
  //manage the session
include 'session.php';
?>
<html>
<head>
	<title>full news</title>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</head>

<body >
	<?php
	include 'header.html' ;

	//$aid = $_GET['aid'];
	//echo $aid;
	session_start();
	$aid = $_SESSION['aid'];
	//echo $aid;
	?>
	<div class="formdes" id="page">
		<div class="subheader">
			<span style="color:#FACF1C;">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
			<a href = "teacher.php" > HOME </a>
			<a href = "content.php" >Create Content </a >
			<a href = "showContent.php" > Show  Contents </a>
			<a href="logout.php"><span class="logout">Logout</span></a>
			
		</div>

		<div style = "width:700px; height:auto; background-color:#FFF1A8; margin-left: auto;
		margin-right:auto; text-align:center;" id="cdiv">

		<?php
		include 'createComment.php';
		?>
		<!-- design of comment button  -->
		<br>
		<form method="POST" action="fullnew.php">
			<input type = "text" class="comment_box" name="comment"><br>
			<div style = "width:700px;height:40px;background-color:#B6B6B6;" id="aa">

				<input type = "submit" value = "Comment" style = "width:80px;height:36px;margin-top:2px;" name="submit" >
			</div>
		</form>
	</div>
</div>
<?php 
include 'bottom.html';
?>
</body>

</html>