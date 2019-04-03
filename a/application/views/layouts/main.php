<!DOCTYPE html>
<html>

<head>
    <title>Quản lí trung tâm</title>
    <link rel="shortcut icon" type="image/png" href="https://dkhp.hcmue.edu.vn/Content/images/logo_HCMUP.png"/>

    <?php include_once("header.php") ?>
</head>

<body class="theme-blue">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <?php include_once("navbar.php") ?>
    <?php include_once("sideBar.php") ?>
	<?php	
	if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>
	<?php include_once("footer.php") ?>
</body>

</html>

