<?php
if( isset($_POST['submit'] ))
{

	$title1 = $_POST['title22'];
	$news = $_POST['article'];
	$status1 = $_POST['status'];
	session_start();	
	$uid = $_SESSION['uid'];
	$status=1;
	if( strcmp($status1,'public') == 0)
	{
        $status=0;
	}
	
	if( empty($title1) || empty($news) || empty($status1))
	{
		die(header("location:createArticle.php?loginFailed=true&reason=password"));

	}
	elseif( ctype_space($title1) || ctype_space($news))
	{
		die(header("location:createArticle.php?loginFailed=true&reason=password"));

	}
	else
	{
		//include mysql connection file
	include '../../common/php/mysql.php';
    $sql = "INSERT INTO create_article" . "( uid,title,article_text,status )" . "values( '$uid','$title1','$news','$status' )";
 	$result = mysql_query( $sql,$conn );
	if(! $result )
	{
			 die( 'Could not enter data: ' . mysql_error() );
	}
	mysql_close( $conn );
	header( "location:teacher.php" );
	}

	
}
else
{
	echo "fail";
}
?>