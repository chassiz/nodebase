<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php include 'head.php'; ?>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">

<?php include 'variables.php'; ?>
	
    <div class="page-wrapper">
      <!-- start header -->
      <?php include 'header.php'; ?>
      <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<?php include 'sidebar_menu.php'; ?>
            <!-- end sidebar menu --> 
			
			<!-- Start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <?php include 'pagebar.php'; ?>
                    <!-- start widget -->
					<?php include 'widgets_home.php'; ?>
					<!-- end widget -->
                     <!-- chart start -->
                    <?php include 'charts_home.php'; ?>
                     <!-- Chart end -->
            <!-- End page content -->
            
            <!-- Start chat sidebar -->
           <?php include 'sidebar_chat.php'; ?>
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
       <?php include 'footer.php'; ?>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <?php include 'footer_js.php'; ?>
    <!-- end js include path -->
  </body>
</html>