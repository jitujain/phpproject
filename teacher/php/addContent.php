<?php
	if( isset($_POST['submit'] ))
	{

		$title1 = $_POST['title22'];
		$news = $_POST['content'];
		$status1 = $_POST['status'];
		session_start();
		$uid = $_SESSION['uid'];
		$status=1;
		if( strcmp($status1,'public') == 0)
		{
            $status=0;
		}
		include 'session.php' ;

		if( empty($title1) || empty($news) || empty($status1))
		{
		  /**
		  *If any one field are empty then
		  *return back to previous page
		  *print the error
		  */
		  die(header("location:content.php?loginFailed=true&reason=password")); 
		}
		else
		{

		  /**
		  *content create by teacher 
		  *data insert into database table
		  */
		  echo $uid;
		  include 'mysql.php';
		  $sql = "INSERT INTO create_content" . "( uid,title,content_text,status )" . "values( '$uid','$title1','$news','$status' )";
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