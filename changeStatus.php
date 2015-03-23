<?php
// get the id from url
$aid = $_GET['aid'];
$status = $_GET['status'];

/**
*update the status of article
*if status is equal to public then change it to private or vice-versa
*/

if( $status == 0)
{
	include 'mysql.php';
	$sql = "update  create_article set status=1 where aid='$aid' ";
	$result = mysql_query( $sql,$conn);
	mysql_close($conn);
	header("location:teacher.php");

}
else
{
	include 'mysql.php';
	$sql = "update  create_article set status=0 where aid='$aid' ";
	$result = mysql_query( $sql,$conn);
	mysql_close($conn);
	header( "location:teacher.php");
}
?>