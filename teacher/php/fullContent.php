<?php
  //manage the session
  include '../../common/php/session.php';
?>
<html>
<head>
	<title>full Content</title>
	<link rel = "stylesheet" type = "text/css" href = "../../common/css/ind.css">
	<link rel = "stylesheet" type = "text/css" href = "../../common/css/head_bottom.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>

<body >
	<?php
	  include '../../common/html/header.html' ;
	?>
	<div class="formdes" id="page">
		<div class="subheader">
		  <span class="subheaderwc">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
		  <a href = "content.php" >Create Content </a >
		  <a href = "createArticle.php" >Create Article </a >
		  <a href = "../../common/php/showArticle.php" > Show  Articles </a>
		  <a href = "showContent.php" > Show  Contents </a>
		  <a href="../../common/php/logout.php"><span class="logout">Logout</span></a>
			
		</div>
		<div style = "width:700px; height:auto; background-color:#6D61A9; margin-left: auto;
		margin-right:auto; text-align:center;margin-top:50px;" id="cdiv">

		<?php
        //get the id from url
		$aid=$_GET['aid'];

        // include mysql connection file
		include '../../common/php/mysql.php';

        // Retriving the value from article table
		$sql = "SELECT * FROM create_content  where cid='$aid' ";
		$result = mysql_query( $sql,$conn);
		while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
		{
			echo '<b>' . $row['title'] . '</b>';
			echo '<br>';
			echo $row['content_text'];

		}
		mysql_close($conn);
		?>
		<!-- design of bottom border  -->
		<br>
		<div style = "width:700px;height:40px;background-color:#9281D6;margin-top:20px;" id="aa"></div>
	    </div>
    </div>
    <?php 
     include '../../common/html/bottom.html';
    ?>
</body>
</html>