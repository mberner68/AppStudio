<?php
$title = "KFA Sliders";
include ('/../main_files/template/header.php');
include ('/inc/globals.php');

$slider_group = '';
$slider_group = $_GET['Group'];
?>
<body>

    <div id="wrapper">

        <?php include ('/../main_files/template/nav.php');
   ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Website Slider</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
       
           <div class="row">
             
            <div class="col-lg-12">
             	<h3>KFA Sliders</h3>
             <button style="background-color: #1E86BC; padding:5px; text-align:center"><a style="color:#fff" href="sliders_kfa.php?Group=All">All</a></button>
             	<?php 
             	$conn = db_connect();
				$sql = "SELECT DISTINCT(sliderLocation) FROM researchsliders";
				$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
		        while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) )
             	  {
				  	  echo '<button style="background-color: #1E86BC; padding:5px; text-align:center"><a style="color:#fff" href="sliders_kfa.php?Group=';
				  	  echo $row['sliderLocation'];
				  	  echo '">' .$row['sliderLocation']. '</a></button>';
				  }
				?></div></div>
				<div class="row">
				<?php  
				  include ('/inc/view_research.php');          	?> 
             	
             	
            </div> 
           
           </div>
           </div>
           <?php
     include ('/../main_files/template/footer.php');      
           ?>