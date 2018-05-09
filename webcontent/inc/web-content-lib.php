<?php
require('globals.php');
$conn = db_connect();

function get_slider_locations_kfa ()
{
	$sql = "SELECT DISTINCT(sliderLocation) FROM kfasliders";
	$result = sqlsrv_query($conn, $sql3) die( print_r( sqlsrv_errors(), true));
	return $result;

}
function grab_slider_location ($slider_group, $website)
{
	switch ($website){
		case 'AAFA':
			$sql4 = "SELECT DISTINCT(sliderLocation) FROM  aafasliders";
				$result = sqlsrv_query($conn, $sql4) die( print_r( sqlsrv_errors(), true));
			return $result;
			break;
		case 'KFA':
			$sql4 = "SELECT DISTINCT(sliderLocation) FROM  kfasliders";
				$result = sqlsrv_query($conn, $sql4) die( print_r( sqlsrv_errors(), true));
			return $result;
			break;
	}
}
function get_kfa_sliders($slider_group){

	if ($slider_group == 'All')
	{
		$sql = "SELECT * FROM kfasliders ";
			$result = sqlsrv_query($conn, $sql) die( print_r( sqlsrv_errors(), true));
		return $result;
	}
	else
	{
		$sql = "SELECT * FROM kfa_sliders WHERE sliderLocation = '$slider_group'";
			$result = sqlsrv_query($conn, $sql) die( print_r( sqlsrv_errors(), true));
		return $result;
	}


}
function get_slider_locations_aafa ()
{
	$sql = "SELECT DISTINCT(`sliderLocation`) FROM `aafasliders`";
	$result = sqlsrv_query($conn, $sql) die( print_r( sqlsrv_errors(), true));
	return $result;

}
function get_aafa_sliders($slider_group){
	 
	if ($slider_group == 'All')
	{
		$sql = "SELECT * FROM aafasliders";
		$result = sqlsrv_query($conn, $sql) die( print_r( sqlsrv_errors(), true));
		return $result;
	}
	else
	{
		$sql = "SELECT * FROM aafasliders WHERE sliderLocation = '$slider_group'";
		$result = sqlsrv_query($conn, $sql) die( print_r( sqlsrv_errors(), true));
		return $result;
	}

}

function add_slider_db ($slidername, $sliderlocation, $filelocation, $website, $live, $notes)
{
	echo $website;
	switch ($website)
	{
		case 'AAFA' :
		$sql = "INSERT INTO [dbo].[aafasliders]
           (slidername, sliderLocation,fileLocation,live,notes,liveDate,removedate,SlideUrl) VALUES ('$slidername','$sliderlocation','$filelocation','$live','$notes','$liveDate','$removedate','$SlideUrl')";
	$result = sqlsrv_query($conn, $sql) die( print_r( sqlsrv_errors(), true));
	header ("Refresh: 5; URL='/AppStudio/webcontent/slider_aafa.php?Group=All'");
	echo "(If your browser doesn't support this, " .
			"<a href='/AppStudio/webcontent/slider_aafa.php?Group=All'>click here</a>)";
	exit;
	break;
	case 'KFA' :
	$sql = "INSERT INTO [dbo].[kfasliders]
           (slidername, sliderLocation,fileLocation,live,notes,liveDate,removedate,SlideUrl) VALUES ('$slidername','$sliderlocation','$filelocation','$live','$notes','$liveDate','$removedate','$SlideUrl')";
	$result = mysql_query($sql)or die (mysql_error());
	header ("Refresh: 5; URL='/AppStudio/webcontent/slider_aafa.php?Group=All'");
	echo "(If your browser doesn't support this, " .
			"<a href='/AppStudio/webcontent/sliders_kfa.php?Group=All'>click here</a>)";
	exit;
	break;
	
	}

}
	
function grab_slider_info ($slider_name, $website, $location)
{
	switch ($website){
		case 'AAFA':
			$sql3 = "SELECT * FROM  aafasliders WHERE slidername = '$slider_name' AND sliderLocation = '$location'";
			$result = sqlsrv_query($conn, $sql3) die( print_r( sqlsrv_errors(), true));
			return $result;
			break;
		case 'KFA':
			$sql3 = "SELECT * FROM  kfasliders WHERE slidername = '$slider_name' AND sliderLocation = '$location'";
			$result = sqlsrv_query($conn, $sql3) die( print_r( sqlsrv_errors(), true));
			return $result;
			break;
	}
	
	
	
}
function update_slider ($slidername, $sliderlocation, $filelocation, $website, $live, $notes)
{
	
	switch ($website){
		case 'AAFA':
		
$sql2 ="UPDATE [dbo].[aafasliders]
   SET slidername = '$slidername',
      ,sliderLocation = '$sliderlocation', 
      ,fileLocation = '$fileLocation',
      ,live = '$live',
      ,notes = '$notes', 
      ,liveDate = '$liveDate',
      ,removedate = '$removedate',
      ,SlideUrl = '$SlideUrl'
 		WHERE id = '$id";
	$result = sqlsrv_query($conn, $sql2) die( print_r( sqlsrv_errors(), true));
		
	echo 'updated';
	header ("Refresh: 5; URL='/AppStudio/webcontent/slider_aafa.php?Group=All'");
	echo "(If your browser doesn't support this, " .
			"<a href='/AppStudio/webcontent/slider_aafa.php?Group=All'>click here</a>)";
	exit;
	break;
	case 'KFA':
	$sql2 ="UPDATE [dbo].[kfasliders]
   SET slidername = '$slidername',
      ,sliderLocation = '$sliderlocation', 
      ,fileLocation = '$fileLocation',
      ,live = '$live',
      ,notes = '$notes', 
      ,liveDate = '$liveDate',
      ,removedate = '$removedate',
      ,SlideUrl = '$SlideUrl'
 		WHERE id = '$id";
	$result = sqlsrv_query($conn, $sql2) die( print_r( sqlsrv_errors(), true));
	header ("Refresh: 5; URL='/AppStudio/webcontent/sliders_kfa.php?Group=All'");
	echo "(If your browser doesn't support this, " .
			"<a href='/AppStudio/webcontent/sliders_kfa.php?Group=All'>click here</a>)";
	exit;
	break;
    } 
}
	


?>