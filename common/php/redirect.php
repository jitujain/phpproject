<?php
$aid = $_GET['aid'];
$utype = $_GET['utype'];
session_start();
$utype1 = $_SESSION['utype2'];
include 'mysql.php';
$sql = "SELECT * FROM create_article  where aid='$aid' and status=0 ";
$result = mysql_query($sql, $conn);
$count =  mysql_num_rows( $result );


/**
*Here first it get the article id and user type from url
*now check either aid is set or utype is set
*
*if aid is set the it store into session and redirect to fullnew.php
*
*If utype is set then it check user type and redirect according to user type
*It is used because student and teacher both have their different home page content
*so for differentiate both of them and reuse the code, use this concept
*/
if($count == 0)
{
	echo "try to access wrong page";

}
else
{
	if( isset($aid))
	{
		$_SESSION['aid'] = $aid;
		header("location:fullnew.php");

	}

}
if( isset($utype))
{

	if( !strcmp($utype,$utype1))
	{
		header("location:../../student/php/student.php");
	}
	if( !strcmp($utype1,"teacher"))
	{
		header("location:../../teacher/php/teacher.php");
	}
	else
	{
		echo "Try to access wrong page";
	}
}


?>
