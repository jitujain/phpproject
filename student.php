<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src= "reg.js"></script>
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
<body >

	<!-- include header file-->

	<?php
	include 'header.html';
	?>
	<!-- designing code-->
	<div class = "formdes">
		<a href = "showArticle.php" > show  Articles </a>
				<a href = "showContent.php" > show  Contents </a>
				</div>
			<!-- include bottom file-->
			<?php
			include 'bottom.html';
			?>
		
	</body>
	</html>