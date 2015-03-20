<html>
<head>
	<title>full news</title>
</head>
<body >
	<div style = "width:700px; height:auto; background-color:#FFF1A8; margin-left: auto;
	margin-right:auto; text-align:center;">
	<?php
// get the id from url 
	$aid=$_GET['aid'];
// include mysql connection file
	include 'mysql.php';
// retriving the value from article table
	$sql = "SELECT * FROM article where articleid='$aid' ";
	$result = mysql_query( $sql,$conn);
	while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
	{
		echo '<b>' . $row['title'] . '</b>';
		echo '<br>';
		echo $row['art_text'];
	}
	?>
	<!-- design of comment button  -->
	<div style="width:700px;height:40px;background-color:#B6B6B6;margin-top:20px;">
		<input type="button" value="Comment" style="width:80px;height:36px;margin-top:2px;">
	</div>
</div>

</body>
</html>