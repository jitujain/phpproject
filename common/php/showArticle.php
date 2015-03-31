<html>
<head>
	<title>showArticle page</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/ind.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/head_bottom.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src = "../js/reg.js"></script>
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


	<!--include the header file -->
	<?php
	include '../html/header.html';
	?>
	<!--login form -->
	<div class = "formdes" id="page">
		<?php session_start(); ?>
		<!-- 
         *Subheader contain the User name and link of forward pages
         *
		-->
		<div class="subheader">
			<?php
			  include 'selectSubHeader.php'; 
			?>
		</div>
        <?php
            include 'fetchArticle.php';
        ?>
    </div>
    <!--include the bottom file -->
    <?php
     include '../html/bottom.html';
    ?>
</body>
</html>
