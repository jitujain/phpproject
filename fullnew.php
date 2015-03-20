<html>
<head>
	<title>full news</title>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</head>

<body >
	<div style = "width:700px; height:auto; background-color:#FFF1A8; margin-left: auto;
	margin-right:auto; text-align:center;" id="cdiv">
	
	<?php
// get the id from url
   	$aid=$_GET['aid'];

// include mysql connection file
   include 'mysql.php';

// Retriving the value from article table
	$sql = "SELECT * FROM article  where articleid='$aid' ";
	$sql1 = "SELECT * FROM comments where aid='$aid' " ;
	$result = mysql_query( $sql,$conn);
	$result1 = mysql_query($sql1, $conn);
	while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
	{
		echo '<b>' . $row['title'] . '</b>';
		echo '<br>';
		echo $row['art_text'];
		
	}
	while( $row1 = mysql_fetch_array( $result1, MYSQL_ASSOC ))
	{
		
		echo '<br>';	
		echo '<div style="width:700px;height:50px;background-color:yellow">';
		echo $row1['comment'];
		echo $row1['uname'];
		echo '</div>';
		
	}
	mysql_close($conn);
	?>
	<!-- design of comment button  -->
	<br>	
	<form method="POST" >
	<input type = "text" class="comment_box" name="comment"><br>
	<div style = "width:700px;height:40px;background-color:#B6B6B6;" id="aa">

		<input type = "submit" value = "Comment" style = "width:80px;height:36px;margin-top:2px;" >
	</div>
	</form>
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