<?php
  //manage the session
  include 'session.php';
?>
<html>
<head>
     <title>Teacher</title>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src= "reg.js"></script>
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
	include 'header.html';
	?>
	<!-- designing code-->
	<div class = "formdes" id="page">
		<?php session_start(); ?>
		<div class="subheader">
			<span class="subheaderwc">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
			
			<a href="logout.php"><span class="logout">Logout</span></a>
			<a href = "content.php" >Create Content </a >
			<a href = "createArticle.php" >Create Article </a >
			<a href = "showArticle.php" > Show  Articles </a>
			<a href = "showContent.php" > Show  Contents </a>
				
		</div>
			<div class="centertextback" style="width:600px;" id="cdiv">
            <table border="1" align="center" class ="teachertable">
            <tr> 
               <th>Title</th>
               <th>Status</th> 
               <th>Change Status</th>
               <th>Remove</th>
            </tr>
			<?php 
			$uid = $_SESSION['uid'];
			include 'mysql.php';
			//$result = getArticle($_SESSION['email2']);
			$sql = "SELECT * FROM create_article where uid = $uid ";
			$result = mysql_query( $sql,$conn );

			while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
			{ 
				$status='private';
                if($row['status']==0)
                {
                   $status = 'public';
                }
				echo '<tr><td>' . $row['title'] . '</td>&nbsp;&nbsp';
				echo '<td>&nbsp;&nbsp;&nbsp;' . $status . '</td>';
				echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = changeStatus.php?aid='.$row['aid'].'&status='.$row['status'].'  >Change</a></td>';
				echo '<td><a href = removeArticle.php?aid='.$row['aid'].' >Delete</a></td></tr>';	

			}
			?>
			</table>
		</div>
    </div>
	<!-- include bottom file-->
	<?php
	include 'bottom.html';
	?>
</body>
</html>