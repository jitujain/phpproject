<?php
 session_start();
 $utype = $_SESSION['utype2'];
 if( isset($utype))
{
 
	if( !strcmp($utype,"Student"))
	{
		echo '<span class="subheaderwc">Welcome &nbsp; ' . ucwords($_SESSION['uname2']) . '</span>';
		echo '<a href = "redirect.php?utype='. $_SESSION['utype2'] . '" > Home </a>';
		echo '<a href="logout.php"><span class="logout">Logout</span></a>';
	}
	if( !strcmp($utype,"Teacher"))
	{
		echo '<span class="subheaderwc">Welcome &nbsp; ' . ucwords($_SESSION['uname2']) . '</span>';
		echo '<a href = "redirect.php?utype='. $_SESSION['utype2'] . '" > Home </a>';
        echo '<a href = "content.php" >Create Content </a >';
		echo '<a href = "showContent.php" > Show  Contents </a>';
		echo '<a href="logout.php"><span class="logout">Logout</span></a>';	
	}
    
}

?>