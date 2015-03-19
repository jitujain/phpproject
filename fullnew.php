
<html>
<head>
	<title></title>
</head>
<body >
<div style="width:700px;height:600px;background-color:#FFF1A8;margin-left: auto;
margin-right: auto;">
<b></b>
</div>

</body>
</html>


<?php

$aid=$_GET['aid'];
echo $aid;
$host="localhost";
$user="root";
$pwd="jitu";

$conn =mysql_connect($host,$user,$pwd) or die("error in connection");
mysql_select_db('project',$conn)or die('not get db');
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM article where status="public"';
$result = mysql_query( $sql,$conn);
?>