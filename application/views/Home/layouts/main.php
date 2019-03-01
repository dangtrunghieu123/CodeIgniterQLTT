<!DOCTYPE html>
<html lang="en-US">

<head>
	<?php include_once("header.php"); ?>
</head>

<body>
<?php include_one("top.php") ?>
<?php	
	if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>

<?php include_one("bottom.php") ?>

<?php include_once("footer.php") ?>


</body>
</html>