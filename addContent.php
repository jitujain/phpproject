<?php
	if( isset($_POST['submit'] ))
	{

		$title1 = $_POST['title22'];
		$news = $_POST['content'];
		$status1 = $_POST['status'];
		session_start();
		$email1 = $_SESSION['email2'];
		

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

	}
	else
	{
		echo "fail";
	}
?>