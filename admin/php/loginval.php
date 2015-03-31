<?php
  if( isset($_POST['submit']) )
  {   
    $mail1=$_POST['mail1'];
    $pass1=$_POST['pass'];
    session_start();
    echo $mail1;
    echo $pass1;
    //include the mysql connection file
    include '../../common/php/mysql.php';

    $sql = "SELECT * FROM register where email = '$mail1' and pass = md5('" . $pass1 . "')";

    $result = mysql_query( $sql,$conn );
    $count =  mysql_num_rows( $result );
    echo $count;
    if( $count == 1 )
    {
      $utype;
      while( $row = mysql_fetch_array($result)  )
      {

        /**
        *user information store in session
        *this values use later on next pages
        *this values maintain the session
        */        
        $_SESSION['uid'] = $row['uid'];
        $_SESSION['password2'] = $row['pass'];
        $_SESSION['utype2'] = $row['utype'];
        $utype = $row['utype'];
        $_SESSION['uname2'] = $row['uname'];
        $_SESSION['email2'] = $row['email'];
      }
       
       /**
       *First check the user type 
       *then forward the that page
       */

      if( strcmp($utype, 'admin')==0)
      {
        header( "location:admin.php" );

      }
      elseif( strcmp($utype, 'teacher')==0)
      { 
        header( "location:../../teacher/php/teacher.php" );
      }
      else
      {
        header( "location:../../student/php/student.php" );
      }
      

    }
    else
    {
      echo "please provide the right username and password";
      die(header("location:/../index.php?loginFailed=true&reason=password"));
    }

    mysql_close($conn);
    }
    ?>