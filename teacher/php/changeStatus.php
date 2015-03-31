<?php
// get the id from url
$aid = $_GET['aid'];
$status = $_GET['status'];
$type = $_GET['type'];

/**
*update the status of article
*if status is equal to public then change it to private or vice-versa
*/
if( strcmp($type, 'article') == 0)
{
	if( $status == 0)
	{
		include '../../common/php/mysql.php';
		$sql = "update  create_article set status=1 where aid='$aid' ";
		$result = mysql_query( $sql,$conn);
		mysql_close($conn);
		header("location:../../teacher/php/teacher.php");

	}
	else
	{
		include '../../common/php/mysql.php';
		$sql = "update  create_article set status=0 where aid='$aid' ";
		$result = mysql_query( $sql,$conn);
		mysql_close($conn);
		header( "location:../../teacher/php/teacher.php");
	}
}
if( strcmp($type, 'content') == 0)
{
	if( $status == 0)
	{
		include '../../common/php/mysql.php';
		$sql = "update  create_content set status=1 where cid='$aid' ";
		$result = mysql_query( $sql,$conn);
		mysql_close($conn);
		header("location:../../teacher/php/teacher.php");

	}
	else
	{
		include '../../common/php/mysql.php';
		$sql = "update  create_content set status=0 where cid='$aid' ";
		$result = mysql_query( $sql,$conn);
		mysql_close($conn);
		header( "location:../../teacher/php/teacher.php");
	}
}
?>