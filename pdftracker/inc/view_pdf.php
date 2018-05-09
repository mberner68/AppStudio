<?php
include ('/globals.php');
if (!isset ($_GET['q']))
{
	$q = 'AAFA';
}
else
{
	$q =  $_GET['q'];
}

$conn = db_connect();

switch ($q)
{
	case 'All':

	$sql = "SELECT * FROM pdftracking ";
	$pdf = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
	echo '<div class="col-lg-12 col-md-12 col-sm-12">';
    		echo '<h3>' .$q . '</h3>';
    		echo '</div>';
    		echo '<div class="row"><div class="col-lg-8 col-md-8 col-sm-8">';?>
    		<div class="table-responsive">
    		<table class="table table-bordered"><?php
	while ($row = sqlsrv_fetch_array( $pdf, SQLSRV_FETCH_ASSOC))
	{
		include('pdf-layout.php');
	}
	echo '</table></div>';
	break;
  
 	 case $q:
    	$sql = "SELECT * FROM pdftracking WHERE website = '$q'";
    	$pdf = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
	$counter = sqlsrv_num_rows($pdf);
	echo '<div class="col-lg-12 col-md-12 col-sm-12">';
    		echo '<h3>' .$q . '</h3>';
    		echo '</div>';
    		echo '<div class="row"><div class="col-lg-8 col-md-8 col-sm-8">';?>
    		<div class="table-responsive">
    		<table class="table table-bordered"><?php
	 while ($row = sqlsrv_fetch_array( $pdf, SQLSRV_FETCH_ASSOC))
	{
		include('pdf-layout.php');
	} 
	echo '</table></div>';
	break;
	
}
?>
