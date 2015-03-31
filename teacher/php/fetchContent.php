<?php

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
		header('location:../../index.php');
	}
	else
	{

		include '../../common/php/mysql.php';
		session_start();
		// retriving data from article table where status ois public;
		$sql = 'SELECT cid , title , uid , content_text , status , substring(content_text,1,30) as subtext FROM create_content where status = 0';
		$result = mysql_query( $sql,$conn );
		echo '<br><br>';
		while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
		{
			$Name = getName($row['uid']);
		// display the article as teaser page

			echo  '<div class="centertextback" id="cdiv">';
		    echo '<b><br>'.$row['title'].'</b>' ;
			echo '<br><br>';
			echo $row['subtext'] . '...........';
			echo '<br>';
			echo '<a href = fullContent.php?aid='.$row['cid'].'>';
			echo '<br>Click here to read more</br>';
			echo '</a>';
			echo '<span style="color:#FACF1C;align:right;">&nbsp;&nbsp;&nbsp; By-' . $Name . '</span>';
			echo '</div>';
			echo '<br>';
		}

	}
	    function getName($uid)
		{
			$Name;
			include '../../common/php/mysql.php' ;
			$sql = "Select uname from register where uid ='$uid'";
			$result = mysql_query( $sql,$conn );
			while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
			{
               $Name =$row['uname'];
		    }
		    return $Name;
		}
?>