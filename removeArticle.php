<?php
// get the id from url
   	$aid=$_GET['aid'];

// include mysql connection file
   include 'mysql.php';

// Retriving the value from article table
	$sql = "DELETE  FROM create_article  where aid='$aid' ";
	$result = mysql_query( $sql,$conn);
    mysql_close($conn);
    header("location:teacher.php");
?>