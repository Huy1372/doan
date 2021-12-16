<?php
    include "./config.php";
	if(!isset($_SESSION)) session_start();
	function loadClass($c){
		include "./class/$c.php";
	}
	spl_autoload_register("loadClass");
    $controller= Utilities::get("controller", 'sach');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<?php
		include "./pages/head.php"; 
	?>

<body>
    <div id="body-wrapper">
        <!-- Wrapper for the radial gradient background -->

        <div id="sidebar">
             
            <div id="sidebar-wrapper">
                 <img src="./pages/hn.png" with="150pt" height="150pt"/>
                 <p >Họ tên: Nguyen Tan Huy</p>
                 <p> bbbbbb </p>
                 <p>MSSV: DH51802262</p>
                <p>Lớp: D18-TH02</p>
                <?php include "./pages/sideBar/mainNav.php" ?>
                <!-- End #main-nav -->

                <?php include "./pages/sideBar/messages.php" ?>
                <!-- End #messages -->

            </div>
        </div> <!-- End #sidebar -->

        <div id="main-content">
            <!-- Main Content Section with everything -->

            <noscript>
                <!-- Show a notification if the user has disabled javascript -->
                <div class="notification error png_bg">
                    <div>
                        Javascript is disabled or is not supported by your browser. Please <a
                            href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser
                        or <a href="http://www.google.com/support/bin/answer.py?answer=23852"
                            title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface
                        properly.
                        Download From <a href="http://www.exet.tk">exet.tk</a></div>
                </div>
            </noscript>

            <!-- Page Head -->
            <!-- End .shortcut-buttons-set -->

            <form action="index.php?controller=sach&action=filter" method="post">
                <input type="text" name="keyword">
                <input type="submit" value="tìm kiếm">
            </form>
            <div class="clear"></div> <!-- End .clear -->
            <?php
            
                switch ($controller) {
                    case 'sach':
                        include "./controllers/sach.php";
                        break;
                    case 'loaisach':
                        include "./controllers/loaisach.php";
                        break;
                    case 'nxb':
                        include "./controllers/nxb.php";
                        break;
                    default:
                      
                        break;
                }
            ?>


            <?php include "./pages/mainContent/footer.php" ?>
            <!-- End #footer -->

        </div> <!-- End #main-content -->

    </div>
</body>
</html>
