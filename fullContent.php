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
	<title>full Content</title>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</head>

<body >
<a href="logout.php"><span style="text-decoration:none">Logout</span></a>
	<div style = "width:700px; height:auto; background-color:#FFF1A8; margin-left: auto;
	margin-right:auto; text-align:center;" id="cdiv">
	
	<?php
// get the id from url
   	$aid=$_GET['aid'];

// include mysql connection file
   include 'mysql.php';

// Retriving the value from article table
	$sql = "SELECT * FROM contents  where contentid='$aid' ";
	$result = mysql_query( $sql,$conn);
	while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
	{
		echo '<b>' . $row['title'] . '</b>';
		echo '<br>';
		echo $row['content_text'];
		
	}
	mysql_close($conn);
	?>
	<!-- design of comment button  -->
	<br>
	<div style = "width:700px;height:40px;background-color:#B6B6B6;margin-top:20px;" id="aa">

		
	</div>
	
</div>
</body>
<?php 
   if( isset($_POST['comment']))
   {
   	session_start();
   	$comment = $_POST['comment'];
   	include 'mysql.php';
   	$uname = $_SESSION['uname2'];

   

	$sql = "INSERT INTO comments" . "( aid,uname,comment )" . "values( '$aid','$uname','$comment' )";
 	$result = mysql_query( $sql,$conn );
 	
    header("refresh: 0;");

	if(! $result )
	{
			 die( 'Could not enter data: ' . mysql_error() );
	}

   }
?>
</html>