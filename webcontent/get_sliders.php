<?php

$loc = $_GET['loc'];
 require('/inc/globals.php');
 $conn = db_connect();
 $data = array();
 
 $sql3 = "SELECT * FROM [app_studio].[dbo].[aafasliders] WHERE sliderLocation = '$loc";
        $result = sqlsrv_query($conn, $sql3);
        if( $result === false){
     die( print_r( sqlsrv_errors(), true));
     }
     while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) )
     {
     
	 $data[] = array("slider" =>$row['slidername'], "sliderLocation" => $row['sliderLocation'], "location" => $row['fileLocation'],"Live"=>$row['live'],"LiveDate" => $row['liveDate'],"RemoveDate"=>$row['removedate'],"Url"=>$row['SlideUrl']);
	 	
	 	
	 }
echo json_encode($data);
	
?>