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
<body>
	<!-- include header file -->
	<?php
	include 'header.html';
	?>

	<div class = "formdes">

		<!-- form description -->

		<p id = "formid"><b>Please Complete your deatils</b></p><a href="logout.php"><span style="text-decoration:none">Logout</span></a> 
		
		<form id = "checkvalue"   action= "register.php" method = "POST" >
			<input type = "text"    placeholder = "Enter email"  id = "email" class = "textbox" name = "email">	<br>
			<input type = "text"     placeholder = "Enter username"   id = "uname" class = "textbox" name = "uname"><br>
			<input type = "password" placeholder = "Create password"  id = "pass" class = "textbox" name = "pass"><br>
			<input type = "text"     placeholder = "First name" class = "in"  id = "fname" name = "fname">
			<input type = "text"     placeholder = "Last name" class = "in1"  id = "lname" name = "lname"><br>
			<select class = "textbox" id = "utype" name = "utype">
				       <option><span style = "font-family: cambria;">Select UserType</span></option>
				       <option><span style = "font-family: cambria;">Admin</span></option>
				       <option><span style = "font-family: cambria;">Student</span></option>
				       <option><span style = "font-family: cambria;">Teacher</span></option>
			        </select>
			<input type = "checkbox" class = "checkboxid1">  <span id = "checkboxid"> keep me logged when using this computer </span><br>
			<input type = "checkbox" class = "checkboxid1" > <span id = "checkboxid"> Email me a weekly newslatter </span>
			<input type = "checkbox" class = "checkboxid" > <span id = "checkboxid"> Email me a daily newslatter </span>
			<!-- code of the submit button and that div-->
			<div class = "submit">
				<input type = "submit" value = "Complete Sign-up" id = "sub" >
				<span class = "submittext" >&nbsp;   By Registering you confirm that you agree with our
					<br>
					<a href = "">Terms &amp Conditions</a>&nbsp; and &nbsp;<a href = "">Privacy policy</a>
				</span>
			</div>
		</form>

	</div>
	<!--include bottoom file  -->
	<?php
	include 'bottom.html';
	?>
</body>
</html>