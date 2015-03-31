<?php
/**
*It start the session
*and after logout it destroy the session
*and open the index page
*/
session_start();

session_destroy();

header("location:../../index.php")
?>