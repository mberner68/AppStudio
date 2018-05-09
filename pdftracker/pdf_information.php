<?php
$title = "View PDF Information";
include ('/../main_files/template/header.php');
include ('/inc/globals.php');
$pdfname = $_GET['pdfname'];


?>
<body>

    <div id="wrapper">

        <?php include ('/../main_files/template/nav.php');
   ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pdf</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
       
           <div class="row">
             
            <div class="col-lg-12">
             	<h3><?php echo $pdfname ?></h3>
             	<div class="table-responsive">
				<table class="table table-bordered">
             	<?php 
             	$conn = db_connect();
				
					$sql = "SELECT * FROM pdftracking WHERE pdfname = '$pdfname'";
					$pdf = sqlsrv_query($conn, $sql) or die( print_r( sqlsrv_errors(), true));;
					while ($row = sqlsrv_fetch_array( $pdf, SQLSRV_FETCH_ASSOC))
					{
						echo'<tr><td><strong>Url:</strong></td><td>';
						echo '<a href="'.$row['filelocation'].$row['pdffilename'];
						echo '">'.$row['filelocation'].$row['pdffilename'].'</a></td></tr>';
						$page = array();
						$page = explode(',', $row['pdfpageloc']);
						$arrlength = count($page);
						if ($arrlength <= 1)
						{
							echo '<tr><td><strong>Page Location:</strong></td><td>'.$row['pdfpageloc'];
							echo '</td></tr>';
						}
						else {
							
							for($x = 0; $x < $arrlength; $x++) {
								echo '<tr><td><strong>Page Location:</strong></td><td>'.$page[$x];
								echo '</td></tr>';
								
							}
						}
						echo '<tr><td><strong>Store Location:</strong></td><td>'.$row['pdfstoreloc'];
						echo '</td></tr>';
						echo '<tr><td><strong>Date:</strong></td><td>'.$row['pdfdate'];
						echo '</td></tr>';
						echo '</table></div>';
					}?>
	
	
             </div></div>
				 
           
           </div>
           </div>
           <?php
     include ('/../main_files/template/footer.php');      
           ?>