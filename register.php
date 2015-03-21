<?php
$email = $_POST['email'];
$uname = $_POST['uname'];
$pwd = $_POST['pass'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$utype = $_POST['utype'];
$flag = 0;

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

include 'mysql.php';

/**
* It check wether this email is already registerd or not.
*/
$flag = checkEmail($email);

if( empty($email) || empty($uname) || empty($pwd) || empty($fname) || empty($lname))
{
	echo 'ohhh registration failed';
	echo '<a href="admin.php"> BACK</a>'; 

}
elseif( $utype == 'Select UserType'  )
{

    	//echo "<script type='text/javascript'>alert('$message');</script>";	

    	 //header( "location:admin.php" );
	echo 'select user type';
	echo '<a href="admin.php"> BACK</a>';
       // echo '<a href="admin.php"> BACK</a>'; 

}
elseif( $flag == 1 )
{
	echo 'email already used';
	echo '<a href="admin.php"> BACK</a>'; 

}
else
{
	
	$sql = "INSERT INTO register" . "( email,uname,pass,fname,lname,utype)" . "values( '$email','$uname','$pwd','$fname','$lname','$utype' )";
	$result = mysql_query( $sql,$conn );
	if(! $result )
	{
		echo '<a href="admin.php"> BACK</a>'; 
		die( 'Could not enter data: ' . mysql_error() );
		
	}
	else
	{
		echo "success";
	}

	mysql_close( $conn );
}

function checkEmail($email)
{ 
	$sql = "SELECT * FROM register where email = '$email' ";

	$result = mysql_query( $sql,$conn );
	$count =  mysql_num_rows( $result );
	echo $email;
	return $count;
}
?>