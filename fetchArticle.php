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
			header('location:index.php');
		}
		else
		{

			include 'mysql.php';
			
		// retriving data from article table where status ois public;
			$sql = 'SELECT articleid , title , email , art_text , status , substring(art_text,1,90) as subtext FROM article where status = "public"';
			$result = mysql_query( $sql,$conn );
			echo '<br><br>';
			while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
			{
		// display the article as teaser page

			//echo '<marquee direction="up">';
				echo  '<div class="centertextback"  id="cdiv">';
                echo '<br>';
				echo '<b>'.$row['title'].'</b>' ;
				echo '<br><br>';
				echo $row['subtext'] . '...........';
				echo '<br><br>';
				echo '<a href = aa.php?aid='.$row['articleid'].'>';
				echo '<span style="margin-left:250px;">Click here to read more</span>';
				echo '</a>';
				echo '<span style="color:#FACF1C;">&nbsp;&nbsp;&nbsp; By-' . $row['email'] . '</span><br>';
				echo '</div>';
				
				echo '<br>';
			//echo '</marquee>';

			//
			}

		}
	?>