<?php
$title = "View Sliders Information";
include ('/../main_files/template/header.php');
include ('/inc/globals.php');
$website = $_GET['website'];
$slidername = $_GET['slidername'];
$location = $_GET['location'];

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
             	<h3><?php echo $slidername ?></h3>
             	<?php 
             	$conn = db_connect();
				switch ($website){
					case 'AAFA':
					$sql = "SELECT * FROM aafasliders WHERE slidername = '$slidername' and sliderLocation= '$location'";
					$slider = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));;
					while ($row = sqlsrv_fetch_array( $slider, SQLSRV_FETCH_ASSOC))
					{
					  echo '<div style="font-size:14px;">';
					  echo '<img src="';
				      echo $row['fileLocation'];
				      echo $row ['slidername'];
				      echo '" class="img-responsive" alt="';
				      echo $row ['slidername'];
				      echo '">';
				      echo '<br/>';
				      echo '<b>Position and Location</b>: '.$row['position'] . '&nbsp;&nbsp;' . $row['sliderLocation'];
				    
				      echo '<br/>';
				      echo '<b>Url</b>: '.$row['SlideUrl'];
				      echo '<br/>';
				      echo '<b>Live</b>:' . $row['live'];
				      echo '<br/>';
				      if (isset ($row['liveDate']))
				      {
					  	echo '<b>Live Date</b>: '.$row['liveDate'];
					  }
					  echo '<br/>';
					  if (isset ($row['removeDate']))
					  {
					  	echo '<b>Remove Date</b>: '.$row['removeDate'];
					  }
					  echo '<br/>';
					  if (isset ($row['lastused']))
					  {
					  	echo '<b>Last Used Date</b>: '.$row['lastused'];
					  }
				      echo '</div>';
					}
	
	break;
	case 'ResearchKFA':
					$sql = "SELECT * FROM researchsliders WHERE slidername = '$slidername' and sliderLocation= '$location'";
					$slider = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));;
					while ($row = sqlsrv_fetch_array( $slider, SQLSRV_FETCH_ASSOC))
					{
					  echo '<div style="font-size:14px;">';
					  echo '<img src="';
				      echo $row['fileLocation'];
				      echo $row ['slidername'];
				      echo '" class="img-responsive" alt="';
				      echo $row ['slidername'];
				      echo '">';
				      echo '<br/>';
				      echo '<b>Location</b>: '. $row['sliderLocation'];
				    
				      echo '<br/>';
				      echo '<b>Live</b>:' . $row['live'];
				      echo '<br/>';
				      if (isset ($row['liveDate']))
				      {
					  	echo '<b>Live Date</b>: '.$row['liveDate'];
					  }
					  echo '<br/>';
					  if (isset ($row['removeDate']))
					  {
					  	echo '<b>Remove Date</b>: '.$row['removeDate'];
					  }
					  echo '<br/>';
				      echo '</div>';
					}
	
	break;
	case 'KFA':
	$sql = "SELECT * FROM kfasliders WHERE slidername = '$slidername' and sliderLocation= '$location'";
	$slider = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
	while ($row = sqlsrv_fetch_array( $slider, SQLSRV_FETCH_ASSOC))
					{
					  echo '<div style="font-size:14px;">';
					  echo '<img src="';
				      echo $row['fileLocation'];
				      echo $row ['slidername'];
				      echo '" class="img-responsive" alt="';
				      echo $row ['slidername'];
				      echo '">';
				      echo '<br/>';
				      echo '<b>Position and Location</b>: '.$row['position'] . '&nbsp;&nbsp;' . $row['sliderLocation'];
				      echo '<br/>';
				      echo '<b>Url</b>: '.$row['SlideUrl'];
				      echo '<br/>';
				      echo '<b>Live</b>:' . $row['live'];
				      echo '<br/>';
				      if (isset ($row['liveDate']))
				      {
					  	echo '<b>Live Date</b>: '.$row['liveDate'];
					  }
					  echo '<br/>';
					  if (isset ($row['removeDate']))
					  {
					  	echo '<b>Remove Date</b>: '.$row['removeDate'];
					  }
					  echo '<br/>';
					  if (isset ($row['lastused']))
					  {
					  	echo '<b>Last Used Date</b>: '.$row['lastused'];
					  }
				      echo '</div>';
					}
					break;
				}?>	
             </div></div>
				 
           
           </div>
           </div>
           <?php
     include ('/../main_files/template/footer.php');      
           ?>