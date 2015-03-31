<?php
  //manage the session
  include '../../common/php/session.php';
?>
<html>
<head>
     <title>Teacher</title>
	<link rel = "stylesheet" type = "text/css" href = "../../common/css/ind.css">
	<link rel = "stylesheet" type = "text/css" href = "../../common/css/head_bottom.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src= "../../common/js/reg.js"></script>
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
<body >

	<!-- include header file-->

	<?php
	include '../../common/html/header.html';
	?>
	<!-- designing code-->
	<div class = "formdes" id="page">
		<?php session_start(); ?>
		<div class="subheader">
			<span class="subheaderwc">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
			
			<a href="../../common/php/logout.php"><span class="logout">Logout</span></a>
			<a href = "teacher.php" >Home </a >
			<a href = "content.php" >Create Content </a >
			<a href = "createArticle.php" >Create Article </a >
			<a href = "../../common/php/showArticle.php" > Show  Articles </a>
			<a href = "showContent.php" > Show  Contents </a>
				
		</div>
		    <h2><p id = "formloginid">Your News Article And Teaching Content</p></h2> </br>
			<div class="centertextback" style="width:650px;margin-left:340px;" id="cdiv">
			
            <table border="1" align="center" class ="teachertable">
            <tr> 
               <th>Title</th>
               <th>Status</th> 
               <th>Text Type</th>
               <th>Change Status</th>
               <th>Remove</th>
            </tr>
			<?php 
			$uid = $_SESSION['uid'];
			include '../../common/php/mysql.php';
			$count =0;
			//$result = getArticle($_SESSION['email2']);
			$sql = "SELECT aid,status,substring(title,1,20) as title FROM create_article where uid = $uid ";
			$sql1 = "SELECT * FROM create_content where uid = $uid ";
			$result = mysql_query( $sql,$conn );
			$count =  mysql_num_rows( $result );
			$result1 = mysql_query( $sql1,$conn );
			$count1 =  mysql_num_rows( $result1 );
			if( $count == 0 && $count1 == 0)
			{
				header("location:createArticle.php");
			}
			else
			{
				while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
				{ 
					$status='private';
	                if($row['status']==0)
	                {
	                   $status = 'public';
	                }
					echo '<tr><td>' . $row['title'] . '</td>&nbsp;&nbsp';
					echo '<td>' . $status . '</td>';
					echo '<td>' . "Article" . '</td>';
					echo '<td><a href = changeStatus.php?aid='.$row['aid'].'&status='.$row['status'].'&type='. "article" .'  >Change</a></td>';
					echo '<td><a href = removeArticle.php?aid='.$row['aid'].' >Delete</a></td></tr>';	

				}
				while( $row1 = mysql_fetch_array( $result1, MYSQL_ASSOC ))
				{ 
					$status='private';
	                if($row1['status']==0)
	                {
	                   $status = 'public';
	                }
					echo '<tr><td>' . $row1['title'] . '</td>&nbsp;&nbsp';
					echo '<td>&nbsp;&nbsp;&nbsp;' . $status . '</td>';
					echo '<td>' . "Content" . '</td>';
					echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = changeStatus.php?aid='.$row1['cid'].'&status='.$row1['status'].'&type=' . "content" . '  >Change</a></td>';
					echo '<td><a href = removeArticle.php?cid='.$row1['cid'].' >Delete</a></td></tr>';	

				}
	     	}
			?>
			</table>
		</div>
    </div>
	<!-- include bottom file-->
	<?php
	include '../../common/html/bottom.html';
	?>
</body>
</html>