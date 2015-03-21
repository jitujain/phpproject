<html>
<head>
	<title>Login page</title>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src = "reg.js"></script>
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

<body>


	<?php
	if( isset($_POST['submit']) )
	{		
		$mail1=$_POST['mail1'];
		$pass1=$_POST['pass'];
		session_start();
		
		//include the mysql connection file
		include 'mysql.php';

		$sql = "SELECT * FROM register where email = '$mail1' and pass = '$pass1'";

		$result = mysql_query( $sql,$conn );
		$count =  mysql_num_rows( $result );
		if( $count == 1 )
		{
			$utype;
			while( $row = mysql_fetch_array($result)  )
			{

                // user information store in session				
				$_SESSION['email2'] = $row['email'];
				$_SESSION['password2'] = $row['pass'];
				$_SESSION['utype2'] = $row['utype'];
				$utype = $row['utype'];
				$_SESSION['uname2'] = $row['uname'];
			}
            //redirect on teacher.php page

            if( strcmp($utype, 'admin')==0)
            {
                header( "location:admin.php" );

            }
            elseif( strcmp($utype, 'teacher')==0)
            { 
            	header( "location:teacher.php" );
            }
            else
	            {
            	header( "location:student.php" );
            }
			

		}
		else
		{
			echo "please provide the right username and password";
		}
//while($row=mysql_fetch_array($result))
//	echo "hello".$row['email'];
/*echo $count;
if($count==1)
{
	header("location:loginval.php");

}
else
{
	echo "fdefee";
}
/*if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    $_email="{$row['email']}";
    $_pass="{$row['pass']}";
   
	//if(strcmp($mail, $_email)!=0 && strcmp($pass, $_pass)!=0)
	//{
    echo "EMP ID :{$row['email']}  <br> ".
         "EMP NAME : {$row['pass']} <br> ".

         "--------------------------------<br>";
     //}
     //else
     //{
     	echo "byee";
     //}
     
} 
echo "Fetched data successfully\n";*/
mysql_close($conn);
}
?>
<!--include the header file -->
<?php
include 'header.html';
?>
<!--login form -->
<div class = "formdes">
    
	<p id = "formloginid"> <b>Please Login From Here</b> </p> 
	<form  action = "index.php" method = "POST" >
		<input type = "text" name = "mail1" class = "textbox" placeholder = "Enter Email"><br>
		<input type = "pass" name = "pass" class = "textbox" placeholder = "Enter password"><br>
		<input type = "submit" name = "submit" value = "Login"  id = "loginid">
	</form>
</div>
<!--include the bottom file -->
<?php
include 'bottom.html';
?>
</body>
</html>
