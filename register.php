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


include 'session.php';
include 'mysql.php';

/**
* It check wether this email is already registerd or not.
*/
$flag = checkEmail($email);

if( empty($email) || empty($uname) || empty($pwd) || empty($fname) || empty($lname))
{
	die(header("location:admin.php?loginFailed=true&reason=password")); 

}
elseif( $utype == 'Select UserType'  )
{

   die(header("location:admin.php?loginFailed=true&reason=password")); 

}
elseif( $flag == 1 )
{
	die(header("location:admin.php?loginFailed=true&reason=email")); 

}
else
{
	$pwd = $_POST['pass'];

	
	$sql = "INSERT INTO register" . "( email,uname,pass,fname,lname,utype)" . "values( '$email','$uname',md5('" . $pwd . "'),'$fname','$lname','$utype' )";
	$result = mysql_query( $sql,$conn );
	if(! $result )
	{
		echo '<a href="admin.php"> BACK</a>'; 
		die( 'Could not enter data: ' . mysql_error() );
		
	}
	else
	{
		die(header("location:admin.php?loginFailed=true&reason=success"));  
	}

	mysql_close( $conn );
}

function checkEmail($email)
{ 
	$sql = "SELECT * FROM register where email = '$email' ";
    include 'mysql.php';
	$result = mysql_query( $sql,$conn );
	$count =  mysql_num_rows( $result );
	return $count;
}
?>