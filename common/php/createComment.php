<?php
        // get the id from url
	$aid=$_SESSION['aid'];
	//echo $aid;

    // include mysql connection file
		include 'mysql.php';
    //echo '<table>';
    // Retriving the value from article table
	$sql = "SELECT * FROM create_article  where aid='$aid' ";
	$sql1 = "SELECT * FROM comments where aid='$aid' " ;
	$result = mysql_query( $sql,$conn);
	$result1 = mysql_query($sql1, $conn);
	$count =  mysql_num_rows( $result );
	   echo '<br>';
	while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
	{
		echo '<div class = "commentbox" style="border-bottom:2px  #CCCCCC;">';
		echo '<b><br>' . $row['title'] . '</b>';
		echo '<br><br>';
		echo  $row['article_text'] ;
		echo '</div>'; 

	}
	if($count == 0)
	{

	}
	else
	{
	while( $row1 = mysql_fetch_array( $result1, MYSQL_ASSOC ))
	{

			
		echo '<div class = "commentbox">'; 	
		echo '<br>' . $row1['comment'];
		echo '<br><span style="color:#6AACA5">Comment By-'. $row1['uname'] . '</span>';
		echo '</div>';

	}
    }



  //$aid = $_GET['aid'];
  if( isset($_POST['comment']))
  {
	$comment = $_POST['comment'];
	$uname = $_SESSION['uname2'];
	unset($_POST['comment']);

	if( empty($comment)) 
	{
		echo '<span style = "margin-left:60px;">please provide the comment</span>';
		echo '<a href="fullnew.php" style = "color:#6AACA5;"> BACK</a>'; 

	}
	else
	{
		$sql = "INSERT INTO comments" . "( aid,uname,comment )" . "values( '$aid','$uname','$comment' )";
		$result = mysql_query( $sql,$conn );

		//header("refresh: 1;");


		if(! $result )
		{
			die( 'Could not enter data: ' . mysql_error() );
		}
		header("location:fullnew.php");
    }
}

	mysql_close($conn);
?>