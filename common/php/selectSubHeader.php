<?php
 /**
 *This file return the menus the user according their User Type
 *take the usertype from session
 *compare usertype and return the menus
 */
 session_start();
 $utype = $_SESSION['utype2'];
 if( isset($utype))
{

	if( !strcmp($utype,"student"))
	{
		echo '<span class="subheaderwc">Welcome &nbsp; ' . ucwords($_SESSION['uname2']) . '</span>';
		echo '<a href = "redirect.php?utype='. $_SESSION['utype2'] . '" > Home </a>';
		echo '<a href="logout.php"><span class="logout">Logout</span></a>';
	}
	if( !strcmp($utype,"teacher"))
	{
		echo '<span class="subheaderwc">Welcome &nbsp; ' . ucwords($_SESSION['uname2']) . '</span>';
		echo '<a href = "redirect.php?utype='. $_SESSION['utype2'] . '" > Home </a>';
		echo '<a href = "../../teacher/php/createArticle.php" >Create Article </a >';
        echo '<a href = "../../teacher/php/content.php" >Create Content </a >';
        echo '<a href = "showArticle.php" > Show  Article </a>';
		echo '<a href = "../../teacher/php/showContent.php" > Show  Contents </a>';
		echo '<a href="logout.php"><span class="logout">Logout</span></a>';
	}

}

?>
