<?php
	if( isset($_POST['submit'] ))
	{

		$title1 = $_POST['title22'];
		$news = $_POST['content'];
		$status1 = $_POST['status'];
		session_start();
		$uid = $_SESSION['uid'];
		$status=1;
		if( strcmp($status1,'public'))
		{
            $status=0;
		}
		

	    include 'session.php' ;

		if( empty($title1) || empty($news) || empty($status1))
		{
		  echo "please provide all the field";
		  echo '<a href="content.php"> BACK</a>'; 

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