<?php
// get the id from url
   	$aid=$_GET['aid'];
   	$cid=$_GET['cid'];

// include mysql connection file
   include '../../common/php/mysql.php';
   if( isset($aid))
   {
    // Delete the value from create_article table
	$sql = "DELETE  FROM create_article  where aid='$aid' ";
	$result = mysql_query( $sql,$conn);
    mysql_close($conn);
    header("location:../../teacher/php/teacher.php");
   }
   if( isset($cid))
   {
   	// Delete the value from create_content table
	$sql = "DELETE  FROM create_content  where cid='$cid' ";
	$result = mysql_query( $sql,$conn);
    mysql_close($conn);
    header("location:../../teacher/php/teacher.php");
   }
?>