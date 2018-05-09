
<?php
require ('/inc/globals.php');
$conn = db_connect();
$name = $_POST['name'];
$filename = $_POST['filename'];
$filelocation = $_POST['filelocation'];
$date = $_POST['date'];
$pagelocation = $_POST['pagelocation'];
$storeloc = $_POST['storeloc'];
$website = $_POST['website'];

echo  $storeloc;
$sql = "INSERT INTO [dbo].[pdftracking]
([pdfname]
,[pdffilename]
,[filelocation]
,[pdfdate]
,[pdfpageloc]
,[pdfstoreloc]
,[website])
VALUES
('$name','$filename','$filelocation','$date','$pagelocation','$storeloc','$website')";

$result = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));
header ("Refresh: 5; URL='/AppStudio/pdftracker/index.php");
echo "(If your browser doesn't support this, " .
		"<a href='/AppStudio/pdftracker/index.php'>click here</a>)";
exit;
?>
