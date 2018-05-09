
<?php
    
    $conn = db_connect();
	if ($slider_group == 'All')
	{
		$sql = "SELECT * FROM researchsliders ";
			$slider = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
		    $counter = sqlsrv_num_rows($slider);
		echo '<div class="col-lg-4 col-md-4 col-sm-4">';
    	while ($row = sqlsrv_fetch_array( $slider, SQLSRV_FETCH_ASSOC))
    	{
      	include('/slider-layout3.php');
      	}
	}
	else
	{
		$sql = "SELECT * FROM researchsliders WHERE sliderLocation = '$slider_group'";
			$slider = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
	    $counter = sqlsrv_num_rows($slider);
	echo '<div class="col-lg-4 col-md-4 col-sm-4">';
    	while ($row = sqlsrv_fetch_array( $slider, SQLSRV_FETCH_ASSOC))
    	{
      		include('/slider-layout3.php');
		}
	}
    

    ?>
