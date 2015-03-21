<?php
// make a connection with the mysql database
$host = "localhost";
$user = "root";
$pwd = "jitu";
$conn = mysql_connect( $host,$user,$pwd ) or die("error in connection");
mysql_select_db( 'project',$conn ) or die('not get db');
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
function getArticle($uemail)
{
  $sql = 'SELECT * FROM article';
  $result = mysql_query( $sql,$conn );
  return $result;

}
?>