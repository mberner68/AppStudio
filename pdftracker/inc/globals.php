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
?>


