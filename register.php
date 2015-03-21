<?php
$email = $_POST['email'];
$uname = $_POST['uname'];
$pwd = $_POST['pass'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$utype = $_POST['utype'];
$message = "sssss";


if(empty($email) || empty($uname) || empty($pwd) || empty($fname) || empty($lname))
{
	echo 'ohhh registration failed';
	echo '<a href="admin.php"> BACK</a>'; 

}
elseif($utype == 'Select UserType'  )
{

    	//echo "<script type='text/javascript'>alert('$message');</script>";	

    	 //header( "location:admin.php" );
	echo 'select user type';
	echo '<a href="admin.php"> BACK</a>';
       // echo '<a href="admin.php"> BACK</a>'; 

}
else
{
	include 'mysql.php';
	$sql = "INSERT INTO register" . "( email,uname,pass,fname,lname,utype)" . "values( '$email','$uname','$pwd','$fname','$lname','$utype' )";
	$result = mysql_query( $sql,$conn );
	if(! $result )
	{
		die( 'Could not enter data: ' . mysql_error() );
	}
	else
	{
		echo "success";
	}

	mysql_close( $conn );
}

    //&& $email == '' && $uname == '' && $pwd == '' && $fname ==  '' && $lname == ''

?>