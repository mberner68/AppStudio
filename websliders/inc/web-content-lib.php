<?php
function db_connect ()
{
$serverName = "AAFA-SQL01\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"app_studio", "UID"=>"umbraco_images", "PWD"=>"@sthm@mbmc1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn === false){
     die( print_r( sqlsrv_errors(), true));
}
return $conn;

}


function get_slider_locations_kfa ()
{
	$conn = db_connect();
	$sql = "SELECT DISTINCT(sliderLocation) FROM kfasliders";
	$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
	return $result;

}
function grab_slider_location ($slider_group, $website)
{
	$conn = db_connect();
	switch ($website){
		case 'AAFA':
			$sql4 = "SELECT DISTINCT(sliderLocation) FROM  aafasliders";
				$result = sqlsrv_query($conn, $sql4) or die( print_r( sqlsrv_errors(), true));
			return $result;
			break;
		case 'KFA':
			$sql4 = "SELECT DISTINCT(sliderLocation) FROM  kfasliders";
				$result = sqlsrv_query($conn, $sql4) or die( print_r( sqlsrv_errors(), true));
			return $result;
			break;
	}
}
function get_kfa_sliders($slider_group){
	$conn = db_connect();
	if ($slider_group == 'All')
	{
		$sql = "SELECT * FROM kfasliders ";
			$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
		return $result;
	}
	else
	{
		$sql = "SELECT * FROM kfa_sliders WHERE sliderLocation = '$slider_group'";
			$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
		return $result;
	}


}
function get_slider_locations_aafa ()
{
	$conn = db_connect();
	$sql = "SELECT DISTINCT(sliderLocation) FROM aafasliders";
	$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
	return $result;

}
function get_aafa_sliders($slider_group){
	 $conn = db_connect();
	if ($slider_group == 'All')
	{
		$sql = "SELECT * FROM aafasliders";
		$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
		return $result;
	}
	else
	{
		$sql = "SELECT * FROM aafasliders WHERE sliderLocation = '$slider_group'";
		$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
		return $result;
	}

}

function add_slider_db ($slidername, $sliderlocation, $filelocation, $website, $live, $notes, $livedate, $removedate, $slideurl )
{
	$conn = db_connect();
	echo $website;
	switch ($website)
	{
		case 'AAFA' :
		$sql = "INSERT INTO [dbo].[aafasliders]
           (slidername, sliderLocation,fileLocation,live,notes,liveDate,removedate,SlideUrl) VALUES ('$slidername','$sliderlocation','$filelocation','$live','$notes','$livedate','$removedate','$slideurl')";
	$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
	header ("Refresh: 5; URL='/AppStudio/webcontent/slider_aafa.php?Group=All'");
	echo "(If your browser doesn't support this, " .
			"<a href='/AppStudio/webcontent/slider_aafa.php?Group=All'>click here</a>)";
	exit;
	break;
	case 'KFA' :
	$sql = "INSERT INTO [dbo].[kfasliders]
           (slidername, sliderLocation,fileLocation,live,notes,liveDate,removedate,SlideUrl) VALUES ('$slidername','$sliderlocation','$filelocation','$live','$notes','$livedate','$removedate','$slideurl')";
	$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
	header ("Refresh: 5; URL='/AppStudio/webcontent/slider_aafa.php?Group=All'");
	echo "(If your browser doesn't support this, " .
			"<a href='/AppStudio/webcontent/sliders_kfa.php?Group=All'>click here</a>)";
	exit;
	break;
	
	}

}
	
function grab_slider_info ($slider_name, $website, $location)
{
	$conn = db_connect();
	switch ($website){
		case 'AAFA':
			$sql3 = "SELECT * FROM  aafasliders WHERE slidername = '$slider_name' AND sliderLocation = '$location'";
			$result = sqlsrv_query($conn, $sql3)or die( print_r( sqlsrv_errors(), true));
			return $result;
			break;
		case 'KFA':
			$sql3 = "SELECT * FROM  kfasliders WHERE slidername = '$slider_name' AND sliderLocation = '$location'";
			$result = sqlsrv_query($conn, $sql3)or die( print_r( sqlsrv_errors(), true));
			return $result;
			break;
	}
	
	
	
}
function update_slider ($id, $slidername, $sliderlocation, $filelocation, $website, $live, $notes, $livedate, $removedate, $slideurl)
{
	$conn = db_connect();
	switch ($website){
		case 'AAFA':
		
$sql2 ="UPDATE [dbo].[aafasliders]
   SET slidername = '$slidername',
      ,sliderLocation = '$sliderlocation', 
      ,fileLocation = '$fileLocation',
      ,live = '$live',
      ,notes = '$notes', 
      ,liveDate = '$livedate',
      ,removedate = '$removedate',
      ,SlideUrl = '$slideurl'
 		WHERE id = '$id";
	$result = sqlsrv_query($conn, $sql2) or die( print_r( sqlsrv_errors(), true));
		
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
      ,liveDate = '$livedate',
      ,removedate = '$removedate',
      ,SlideUrl = '$slideurl'
 		WHERE id = '$id";
	$result = sqlsrv_query($conn, $sql2) or die( print_r( sqlsrv_errors(), true));
	header ("Refresh: 5; URL='/AppStudio/webcontent/sliders_kfa.php?Group=All'");
	echo "(If your browser doesn't support this, " .
			"<a href='/AppStudio/webcontent/sliders_kfa.php?Group=All'>click here</a>)";
	exit;
	break;
    } 
}
	


?>