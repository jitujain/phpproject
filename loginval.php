	<?php
	if(isset($_POST['submit']))
	{

        $host="localhost";
        $user="root";
        $pwd="jitu";
        $mail=$_post['mail'];
        $pass=$_post['pass'];
        $conn =mysql_connect($host,$user,$pwd) or die("error in connection");
        mysql_select_db('project',$conn)or die('not get db');
        if(! $conn )
        {
          die('Could not connect: ' . mysql_error());
      }
      $sql = 'SELECT email, pass FROM register';

//mysql_select_db('project',$conn);
      $retval = mysql_query( $sql, $conn );
      if(! $retval )
      {
          die('Could not get data: ' . mysql_error());
      }
      while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
      {
        $str="{$row['email']}";
        if(strcmp($mail, $str)==!0)
        {
            echo "EMP ID :{$row['email']}  <br> ".
            "EMP NAME : {$row['pass']} <br> ".

            "--------------------------------<br>";
        }
        else
        {
          echo "byee";
      }
  } 
  echo "Fetched data successfully\n";
  mysql_close($conn);
}
?>