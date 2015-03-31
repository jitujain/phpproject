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

			<p id = "formid"><b>Please Create New  Account</b></p>
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
			<!-- <input type = "checkbox" class = "checkboxid1">  <span id = "checkboxid"> keep me logged when using this computer </span><br>
			<input type = "checkbox" class = "checkboxid1" > <span id = "checkboxid"> Email me a weekly newslatter </span>
			<input type = "checkbox" class = "checkboxid" > <span id = "checkboxid"> Email me a daily newslatter </span> -->
			<?php 
				  echo '<div class = "loginerror">';
				  $reasons = array("password" => "Provide All The Field", "blank" => "You have left one or more fields blank.", "email" => "Email already used" , "success" => "Successfully Registered"); 
				  if ($_GET["loginFailed"]) 
				  echo $reasons[$_GET["reason"]];
				  echo '</div>'; 
			?>	
			<!-- code of the submit button and that div-->
			</br><input type = "submit" value = "Complete Sign-up" id = "loginid" >
			<!-- <div class = "submit">
			
			<span class = "submittext" >&nbsp;   By Registering you confirm that you agree with our
			<br>
			<a href = "">Terms &amp Conditions</a>&nbsp; and &nbsp;<a href = "">Privacy policy</a>
			</span>
			</div> -->
			</form>
			</div>
			</div>
		<!--include bottoom file  -->
		<?php
		  include '../../common/html/bottom.html';
		?>
	</body>
</html>