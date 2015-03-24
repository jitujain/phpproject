<?php

		/**
		*session restore
		*user can not access this page by typeing url directly
		*user must be login for access the this page
		*/
		session_start();
		$uemail= $_SESSION['email2'];
		$upass = $_SESSION['password2'];
		$uid =  $_SESSION['uid'];
		if( empty($uemail) || empty($upass))
		{
			header('location:index.php');
		}
		else
		{

			include 'mysql.php'; 
			
			
		// retriving data from article table where status ois public;
			$sql = "SELECT aid , title , uid , article_text , status , substring(article_text,1,90) as subtext FROM create_article where status = 0 OR uid = '$uid' ";
			$result = mysql_query( $sql,$conn );
			echo '<br><br>';
			while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
			{
		// display the article as teaser page
				echo  '<div class="centertextback"  id="cdiv">';
                echo '<br>';
				echo '<b>'.$row['title'].'</b>' ;
				echo '<br><br>';
				echo $row['subtext'] . '...........';
				echo '<br><br>';
				echo '<a href = redirect.php?aid='.$row['aid'].'>';
				echo '<span style="margin-left:250px;">Click here to read more</span>';
				echo '</a>';
				echo '<span style="color:#FACF1C;">&nbsp;&nbsp;&nbsp; By-' . $_SESSION['email2'] . '</span><br>';
				echo '</div>';
				echo '<br>';
			}

		}
		/**
		*SELECT a.article_text, b.article_text
*FROM create_article a, create_article b
*WHERE a.status =0
*AND b.uid =3
*LIMIT 0 , 30
		**/
	?>