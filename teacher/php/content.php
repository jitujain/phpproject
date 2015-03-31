<?php
  //manage the session
  include 'session.php';
?>
<html>
<head>
    <title>Content</title>
	<link rel = "stylesheet" type = "text/css" href = "../../common/css/ind.css">
	<link rel = "stylesheet" type = "text/css" href = "../../common/css/head_bottom.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src = "../../common/js/reg.js"></script>
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
	  include '../../common/html/header.html';
	?>

	<div class = "formdes" id="page">
		<?php
		session_start();
		//echo "uname is" . $_SESSION['uname2'];
		//echo $_SESSION['uname2'];
		?>
		<div class="subheader" >
			<span class="subheaderwc"> Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
			<a href="../../common/php/logout.php"><span class="logout">Logout</span></a>
			<a href = "teacher.php" > Home </a>
			<a href = "createArticle.php" >Create Article </a >
			<a href = "content.php" >Create Content </a >
			<a href = "../../common/php/showArticle.php" > Show  Articles </a>
			<a href = "showContent.php" > Show  Contents </a>
		</div>

			<!-- content page design -->

		<h2><p id = "formloginid">Create Your Content Here</p></h2> 
		<div class="formbackground">
		<form  action = "addContent.php" method = "POST">
			<input type = "text" name = "title22" class = "textbox" placeholder = "Enter Title "><br>
			<textarea name = "content" class = "articlebox" placeholder = "Enter Content" rows="3" cols="25"></textarea><br>
			<span class = "selectRadio">Select Status Type</span>
			<span class = "statusText">Private<span><input type = "radio" name = "status" value = "private" class="radio" checked="checked">
			<span class = "statusText">Public</span><input type = "radio" name = "status" value = "public" class="radio"><br>
			<?php 
				  echo '<div class = "loginerror">';
				  $reasons = array("password" => "Provide All The Field", "blank" => "You have left one or more fields blank."); 
				  if ($_GET["loginFailed"]) 
				  echo $reasons[$_GET["reason"]];
				  echo '</div>'; 
			?>
			</br>
			<input type = "submit" name = "submit" value = "Submit	"  id = "loginid">
		</form>
		</div>
		</div>
			<!-- include the bottom file -->
	<?php
	  include '../../common/html/bottom.html';
	?>
	</div>
</body>
</html>