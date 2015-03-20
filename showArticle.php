<?php

/**$host="localhost";
$user="root";
$pwd="jitu";

$conn =mysql_connect($host,$user,$pwd) or die("error in connection");
mysql_select_db('project',$conn)or die('not get db');
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}**/
include 'mysql.php';
session_start();
// retriving data from article table where status ois public;
$sql = 'SELECT * FROM article where status = "public"';
$result = mysql_query( $sql,$conn );

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
?>