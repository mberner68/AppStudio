<?php 
include ('/globals.php');
	if (!isset ($_GET['q']))
	{
	  $q = 'Home';
	}
	else 
	{	
   		$q =  $_GET['q'];
	}
	
    $conn = db_connect();
    
    switch ($q)
    {
    	case 'All':
    		$sql = "SELECT * FROM aafasliders";
    		$slider = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
    		$counter = sqlsrv_num_rows($slider);
    		echo '<div class="col-lg-12 col-md-12 col-sm-12">';
    		echo '<h3>' .$q . '</h3>';
    		echo '</div>';
    		echo '<div class="col-lg-4 col-md-4 col-sm-4">';
    		
    		while ($row = sqlsrv_fetch_array( $slider, SQLSRV_FETCH_ASSOC))
    		{
    			include('/slider-layout2.php');
    		}
    		break;
    	case $q:
	
		$sql = "SELECT * FROM aafasliders WHERE sliderLocation = '$q'";
			$slider = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
	    $counter = sqlsrv_num_rows($slider);
	    echo '<div class="col-lg-12 col-md-12 col-sm-12">';
	    echo '<h3>' .$q . '</h3>';
	    echo '</div>';
	    echo '<div class="col-lg-4 col-md-4 col-sm-4">';
	    
    	while ($row = sqlsrv_fetch_array( $slider, SQLSRV_FETCH_ASSOC))
    	{
      		include('/slider-layout2.php');
		}
    break;
       
    }
    

    ?>

