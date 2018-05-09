<?php

$title = "Content Dashboard";
include ('/../main_files/template/header.php');

?>

<body>

    <div id="wrapper">

        <?php include('/../main_files/template/nav.php');
   ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Content Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
       
           <div class="row">
           
          <div class="col-lg-6 col-md-6 col-sm-6">
              <h3>PDF Tracking</h3>
              <ul>
                  <li><a href="add_pdf.php">Add Pdf</a></li>
                  <li><a href="pdf_list.php?Group="All">View Pdf List</a></li>
              </ul>
           </div>
          	
           </div>
    			</div>
    			</div>
           <?php
     include ('/../main_files/template/footer.php');      
           ?>
           
    
  
