<?php
// get the id from url
$aid = $_GET['aid'];
$status = $_GET['status'];

/**
*update the status of article
*if status is equal to public then change it to private or vice-versa
*/

if( strcmp( $status, "public") == 0)
{
	include 'mysql.php';
	$sql = "update  article set status='private' where articleid='$aid' ";
	$result = mysql_query( $sql,$conn);
	mysql_close($conn);
	header("location:teacher.php");

}
else
{
	include 'mysql.php';
	$sql = "update  article set status='public' where articleid='$aid' ";
	$result = mysql_query( $sql,$conn);
	mysql_close($conn);
	header( "location:teacher.php");
}
?>