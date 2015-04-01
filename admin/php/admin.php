<!--
This page is open when the admin is login
From here Admin can create new user

-->

<?php
  //manage the session
include '/../../common/php/session.php';
?>
<html>
<head>
	<title>Admin</title>
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
	<!-- include header file -->
	<?php
	include '../../common/html/header.html';
	?>
	<!-- this subheader show the some link to forward next page and show logout button-->
	<div class = "formdes" id="page">
		<div class="subheader">
			<span class="subheaderwc">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
			<a href="../../common/php/logout.php"><span class="logout">Logout</span></a>

		</div>

		<!-- form description -->

		<p id = "formloginid"><b>Please Create New  Account</b></p>
		<div class="formbackground">
			<form id = "checkvalue"   action= "register.php" method = "POST" >
				<input type = "text"    placeholder = "Enter email"  id = "email" class = "textbox" name = "email">	</br>
				<input type = "text"     placeholder = "Enter username"   id = "uname" class = "textbox" name = "uname"></br>
				<input type = "password" placeholder = "Create password"  id = "pass" class = "textbox" name = "pass"></br>
				<input type = "text"     placeholder = "First name" class = "textbox"  id = "fname" name = "fname"></br>
				<input type = "text"     placeholder = "Last name" class = "textbox"  id = "lname" name = "lname"></br>
				<select class = "textbox" id = "utype" name = "utype">
					<option>Select UserType</option>
					<option>admin</option>
					<option>student</option>
					<option>teacher</option>
				</select>
      <!--
        following code is execute when admin submit the form
        without fill all the field
      -->
				<?php
				echo '<div class = "loginerror">';
				$reasons = array("password" => "Provide All The Field", "blank" => "You have left one or more fields blank.", "email" => "Email already used" , "success" => "Successfully Registered");
				if ($_GET["loginFailed"])
					echo $reasons[$_GET["reason"]];
				echo '</div>';
				?>
				<!-- code of the submit button and that div-->
			  </br><input type = "submit" value = "Complete Sign-up" id = "loginid" >
	    </form>
</div>
</div>
<!--include bottoom file  -->
<?php
include '../../common/html/bottom.html';
?>
</body>
</html>
