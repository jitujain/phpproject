<html>
<head>
	<title>showArticle page</title>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src = "reg.js"></script>
	<!-- script execute after java script is off done by browser -->
	<noscript>
		<style type = "text/css">
			#checkvalue {display:none;}
		</style>
		<div class = "noscriptmsg">
			You don't have javascript enabled.  Good luck with that.
			<br>
			Please Enable your java Sript.
		</div>
	</noscript>
</head>

<body>


	<!--include the header file -->
	<?php
	include 'header.html';
	?>
	<!--login form -->
	<div class = "formdes" id="page">
		<?php session_start(); ?>
		<div class="subheader">
			<span style="color:#FACF1C;">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
			<a href = "teacher.php" > HOME </a>
			<a href="logout.php"><span class="logout">Logout</span></a>
			<a href = "content.php" >Create Content </a >
			<a href = "showContent.php" > Show  Contents </a>
			
			 
		</div>


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
			$sql = 'SELECT articleid , title , email , art_text , status , substring(art_text,1,20) as subtext FROM article where status = "public"';
			$result = mysql_query( $sql,$conn );
			while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
			{
		// display the article as teaser page

			//echo '<marquee direction="up">';
				echo  '<div style = "width:700px; height:auto; background-color:#FFF1A8; margin-left: auto;margin-right:auto; text-align:center;" id="cdiv">';

				echo '<b>'.$row['title'].'</b>' ;
				echo '<br>';
				echo $row['subtext'] . '...........';
				echo '<br>';
				echo '<a href = aa.php?aid='.$row['articleid'].'>';
				echo '<span style="color:blue;margin-left:300px;">Click here to read more</span>';
				echo '<span style="color:#FACF1C;">&nbsp;&nbsp;&nbsp; By-' . $row['email'] . '</span>';
				echo '</div>';
				echo '</a>';
				echo '<br>';
			//echo '</marquee>';

			//
			}

		}
	?>


    </div>
    <!--include the bottom file -->
    <?php
     include 'bottom.html';
    ?>
</body>
</html>
