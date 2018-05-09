<?php
    $title = "Update slider to Database";
    include ('/../main_files/template/header.php');
    include ('/inc/globals.php');
	$slider_name = $_GET['name'];
	$website = $_GET['website'];
	$location = $_GET['location'];
	$conn = db_connect();
	switch ($website){
		case 'AAFA':
			$sql3 = "SELECT * FROM  aafasliders WHERE slidername = '$slider_name' AND sliderLocation = '$location'";
			$result = sqlsrv_query($conn, $sql3)or die( print_r( sqlsrv_errors(), true));
			while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
    		{	
    		$id = $row['id'];
    		$file = $row['fileLocation'];
    		$live = $row['live'];
    		$notes = $row['notes'];
    		$livedate = $row['liveDate'];
    		$removedate = $row['removedate'];
    		$url = $row['SlideUrl'];
    		$lastused = $row['lastused'];
    		$position = $row['position'];
    		}	
			break;
		case 'KFA':
			$sql3 = "SELECT * FROM  kfasliders WHERE slidername = '$slider_name' AND sliderLocation = '$location'";
			$result = sqlsrv_query($conn, $sql3)or die( print_r( sqlsrv_errors(), true));
			while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
    		{	
    		$id = $row['id'];
    		$file = $row['fileLocation'];
    		$live = $row['live'];
    		$notes = $row['notes'];
    		$livedate = $row['liveDate'];
    		$removedate = $row['removedate'];
    		$url = $row['SlideUrl'];
    		$lastused = $row['lastused'];
    		$position = $row['position'];
    		}	
			break;
		case 'ResearchKFA':
			$sql3 = "SELECT * FROM  researchsliders WHERE slidername = '$slider_name' AND sliderLocation = '$location'";
			$result = sqlsrv_query($conn, $sql3)or die( print_r( sqlsrv_errors(), true));
			while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
    		{	
    		$id = $row['id'];
    		$file = $row['fileLocation'];
    		$live = $row['live'];
    		$notes = $row['notes'];
    		$livedate = $row['liveDate'];
    		$removedate = $row['removedate'];
    		}	
			break;	
	}
	if (!isset($removedate))
	{
		$removedate = '0';
		
	}
	if (!isset($lastused))
	{
		$lastused = '0';
		
	}
	if (!isset($position))
	{
		$position = '0';
		
	}
?>
<body>

    <div id="wrapper">

        <?php include ('/../main_files/template/nav.php');
   ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Slider</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>      	
    	<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4" style="border:3px solid #0000cc; margin:0 auto; border-radius: 10px;">
			
    			<form class="form-horizontal" action="add_slider.php" method="post" enctype="multipart/form-data">
                 <div class="form-group" style="padding:6px;">
    			 <label for= "Slidername" class="control-label">Slider Namer</label>
    			 <input type="text" name="slider-name" id="slider-name" value="<?php echo $slider_name; ?>"/>
    				</div>
    				<div class="form-group" style="padding:6px;">
    				<label for= "FileLocation" class="control-label">File Location</label>
    				<input type="text" name="file-location" id="file-location" value="<?php echo $file; ?>"/>
    				</div>
					<div class="form-group" style="padding:6px">
    				<label for= "website" class="control-label">Website</label>
    					<input type="text" name="website" id="website" value="<?php echo $website; ?>"/>
    				</div>
    				<div class="form-group" style="padding:6px;">
    				<label for= "sliderLocation" class="control-label">Slider Location</label>
    				<input type="text" name="slider-location" id="slider-location" value="<?php echo  $location; ?> "/>
				    </div>
				    
					<div class="form-group" style="padding:6px;">
    				<label for= "Live" class="control-label">Live</label>
					<input type="text" name="live" id="live" value="<?php echo $live; ?> "/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Live Date" class="control-label">Live Date</label>
					<input type="text" name="liveDate" id="liveDate" value="<?php echo $livedate; ?>"/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Remove Date" class="control-label">Remove Date</label>
					<input type="text" name="removeDate" id="removeDate" value="<?php echo $removedate;?>"/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Slide Url" class="control-label">Slide Url</label>
					<input type="text" name="slideurl" id="rslideurl" value="<?php echo $url ?>"/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Remove Date" class="control-label">Last Used Date</label>
					<input type="text" name="lastused" id="lastused" value="<?php echo $lastused ?>"/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Notes" class="control-label">Notes</label>
    				<textarea cols="20" rows="10" name="notes"><?php echo $notes;?>
					</textarea>
    				</div>
    				<div class="form-group" style="padding:6px;">
    				<label for= "Slide Url" class="control-label">Position</label>
					<input type="text" name="position" id="position" value="<?php echo $position ?>"/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Slide id" class="control-label">Id</label>
					<input type="text" name="id" id="id" value="<?php echo $id ?>"/>
					</div>
    				<div class="form-group">
    					<div class="col-sm-offset-2 col-sm-4">
      						<button type="submit" name="action" value="update" class="btn btn-default">Update Slider</button>
							
    					</div>
  </div>
    			</form>
    			
    			</div>
    		<div class="col-lg-4 col-md-4 col-sm-4">&nbsp;</div>
    	   <div class="col-lg-4 col-md-4 col-sm-4">
    			
    					</div>
    					</div>
  </div>
    			</form>
    			</div>
    		</div>
    	</div>
            </div>
            <!-- /.row -->
       
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php
     include ('/../main_files/template/footer.php');      
           ?>
