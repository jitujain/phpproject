<?php
if( isset($_POST['submit'] ))
{

	$title1 = $_POST['title22'];
	$news = $_POST['article'];
	$status1 = $_POST['status'];
	session_start();
	$email1 = $_SESSION['email2'];
	echo $title1 . "<br>";
	echo $news . "<br>";
	echo $email1 . "<br>";
	echo $_POST['status'];

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

include 'mysql.php';

$sql = "INSERT INTO contents" . "( email,title,content_text,status )" . "values( '$email1','$title1','$news','$status1' )";
$result = mysql_query( $sql,$conn );
if(! $result )
{
	die( 'Could not enter data: ' . mysql_error() );
}

mysql_close( $conn );
header( "location:teacher.php" );

}
else
{
	echo "fail";
}
	
?>