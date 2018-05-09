<?php
$title = "AAFA Sliders";
include ('/../main_files/template/header2.php');
include ('/inc/globals.php');
?>
<script src="/AppStudio/websliders/inc/slider_select.js"></script>
</head>
<body>

    <div id="wrapper">

       <?php include('/../main_files/template/nav.php');
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
             	<h3>AAFA Sliders</h3>
             	 <form>
     	    <div class="form-group" style="padding:6px;">
			<label for= "sliderLocation" class="control-label">Slider Location</label>
			<select name="layout" onchange="AAFAshowLayout(this.value)">
			<?php
			$conn = db_connect();
			$sql = "SELECT DISTINCT(sliderLocation) FROM aafasliders";
			$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
			while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
			{
			echo  "    <option value=\"" .$row['sliderLocation']. "\">" . $row['sliderLocation'] .
			"</option>\n";
			}
			?>
		   echo  '<option value="All">All</option>\n';
			?>
		   </select>
			</form>
				<br>
             	</div></div>
				<div class="row">
				
				<div id="txtHint">';
				
        		</div> 
           </div>
           </div>
           <?php
     include ('/../main_files/template/footer.php');      
           ?>
