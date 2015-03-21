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
session_start();
// retriving data from article table where status ois public;
$sql = 'SELECT * FROM article where status = "public"';
$result = mysql_query( $sql,$conn );
echo '<a href="logout.php"><span style="text-decoration:none">Logout</span></a>';
while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
{
// display the article as teaser page

	echo '<a href = fullnew.php?aid='.$row['articleid'].'>';
	echo  '<div style = "width:196px;height:66px;background-color:#FFFA18;float:left;margin-left:20px;">';
	echo $row['title'] . "............";
	echo '<span style="color:blue;">Click here o read more</span>';
	echo '</div>';
	echo '</a>';
}
echo $_SESSION['uname2'];
}
?>