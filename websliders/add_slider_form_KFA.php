<?php
    $title = "Add slider to Database";
    include ('/../main_files/template/header.php');
    require ('/inc/globals.php');
    $conn = db_connect();
    $sql = "SELECT DISTINCT(sliderLocation) FROM kfasliders";
	$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
	$slider_group="";
	?>
 
 <body>

    <div id="wrapper">

       <?php include ('/../main_files/template/nav.php');
   ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Slider KFA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
       
              	
    	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6" style="border:3px solid #0000cc; margin:0 auto; border-radius: 10px;">
			<h3>KFA</h3>
    			<?php include('/inc/kfa.php');?>
    			</div>
    		<div class="col-lg-6 col-md-6 col-sm-6">&nbsp;</div>
    	 
    		</div>
    	</div></div>

    
    <!-- /#wrapper -->

   <?php
     include ('/../main_files/template/footer.php');      
           ?>
