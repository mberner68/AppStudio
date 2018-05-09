<?php
   
   include ('inc/globals.php');
   
    $id = $_POST['id'];
    $slidername = $_POST['slider-name'];
	$sliderlocation=$_POST['slider-location'];
	$filelocation =$_POST['file-location'];
	$website=$_POST['website'];
	$live = $_POST['live'];
	$notes = $_POST['notes'];
	$removedate = $_POST['removeDate'];
	$livedate = $_POST['liveDate'];
	$sliderurl = $_POST['slideurl'];
	$lastused = $_POST['lastused'];
	$position = $_POST['position'];

	switch ($_POST['action']){
		
		case 'add':
		  $conn = db_connect();
		  echo $website;
			switch ($website)
			{
					case 'AAFA' :
					$sql = "INSERT INTO [dbo].[aafasliders]
			           (slidername, sliderLocation,fileLocation,live,notes,liveDate,removedate,SlideUrl,position, lastused) VALUES ('$slidername','$sliderlocation','$filelocation','$live','$notes','$livedate','$removedate','$sliderurl','$position','$lastused')";
				$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
				
				header ("Refresh: 5; URL='/AppStudio/websliders/slider_aafa.php");
				echo "(If your browser doesn't support this, " .
						"<a href='/AppStudio/websliders/slider_aafa.php'>click here</a>)";
				exit;
				break;
				case 'KFA' :
				$sql = "INSERT INTO [dbo].[kfasliders]
			           (slidername, sliderLocation,fileLocation,live,notes,liveDate,removedate,SlideUrl,position, lastused) VALUES ('$slidername','$sliderlocation','$filelocation','$live','$notes','$livedate','$removedate','$sliderurl','$position','$lastused')";
				$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
				
				header ("Refresh: 5; URL='/AppStudio/websliders/slider_kfa.php'");
				echo "(If your browser doesn't support this, " .
						"<a href='/AppStudio/websliders/sliders_kfa.php'>click here</a>)";
				exit;
				break;
			}
		break;
	
      case 'update':
			$conn = db_connect();
			switch ($website){
				case 'AAFA':
				
					$sql2 ="UPDATE [dbo].[aafasliders]
					   SET sliderLocation = '$sliderlocation', 
					      fileLocation = '$filelocation',
					      live = '$live',
					      notes = '$notes', 
					      liveDate = '$livedate',
					      removedate = '$removedate',
					      SlideUrl = '$sliderurl',
					       position = '$position',
		      				lastused = '$lastused'
					 		WHERE id = '$id'";
						$result = sqlsrv_query($conn, $sql2) or die( print_r( sqlsrv_errors(), true));
							
						echo 'updated';
						header ("Refresh: 5; URL='/AppStudio/websliders/slider_aafa.php'");
						echo "(If your browser doesn't support this, " .
								"<a href='/AppStudio/websliders/slider_aafa.php'>click here</a>)";
						exit;
			break;
			case 'KFA':
			$sql2 ="UPDATE [dbo].[kfasliders]
		   SET sliderLocation = '$sliderlocation', 
		      fileLocation = '$filelocation',
		      live = '$live',
		      notes = '$notes',
		      liveDate = '$livedate',
		      removedate = '$removedate',
		      SlideUrl = '$sliderurl',
		      position = '$position',
		      lastused = '$lastused'
		 		WHERE id = '$id'";
			$result = sqlsrv_query($conn, $sql2) or die( print_r( sqlsrv_errors(), true));
			header ("Refresh: 5; URL='/AppStudio/websliders/sliders_kfa.php'");
			echo "(If your browser doesn't support this, " .
					"<a href='/AppStudio/websliders/sliders_kfa.php'>click here</a>)";
			exit;
			break;
		   case 'ResearchKFA':
			$sql2 ="UPDATE [dbo].[researchsliders]
		   SET sliderLocation = '$sliderlocation', 
		      fileLocation = '$filelocation',
		      live = '$live',
		      notes = '$notes',
		      liveDate = '$livedate',
		      removedate = '$removedate'
		 		WHERE id = '$id'";
			$result = sqlsrv_query($conn, $sql2) or die( print_r( sqlsrv_errors(), true));
			header ("Refresh: 5; URL='/AppStudio/websliders/sliders_kfa.php'");
			echo "(If your browser doesn't support this, " .
					"<a href='/AppStudio/websliders/sliders_kfa.php'>click here</a>)";
			exit;
			break;
		   
		    } 
		break;	
		
		
		
	}
?>