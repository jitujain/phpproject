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
	<title>Create Comment</title>
</head>
<body>
   <div style = "width:700px; height:300px; background-color:white; margin-left: auto;
	margin-right:auto; text-align:center;">
	<input type = "text"><br>
	<input type = "button" value="submit">
	</div>
</body>
</html>