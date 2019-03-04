<!DOCTYPE html>
<html lang="en-US">

<head>
	<?php include_once("header.php"); ?>
</head>

<body>
<?php include_once("top.php") ?>
<?php	
	if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>

<?php include_once("bottom.php") ?>

<?php include_once("footer.php") ?>


</body>
</html>