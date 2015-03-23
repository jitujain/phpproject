<?php
$aid = $_GET['aid'];
$utype = $_GET['utype'];
session_start();
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
if( isset($aid))
{
	$_SESSION['aid'] = $aid;
    header("location:fullnew.php");

}
if( isset($utype))
{
 
	if( !strcmp($utype,"Student"))
	{
		header("location:student.php");
	}
	if( !strcmp($utype,"Teacher"))
	{
		header("location:teacher.php");
	}
    
}


?>