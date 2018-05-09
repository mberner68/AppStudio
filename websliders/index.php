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
              <h3>Website Sliders</h3>
              <p><a href="/websliders/sliders_kfa.php?Group=All"><img src="http://www.kidswithfoodallergies.org/themes/kfa-new-theme/img/kfa-new.png"></a><br>
<span style="text-align:center"><br><a href="sliders_kfa.php">KFA SLIDERS</a>
              <br><a href="add_slider_form_KFA.php">Add a new slider</a></span></p><br>
              <p><a href="slider_aafa.php?Group=All"><img src="http://www.aafa.org/themes/kfa-new-theme/img/aafa-new.png"></a>
              <span style="text-align:center"><br><a href="sliders_aafa.php">AAFA Sliders</a>
              <br><a href="add_slider_form_AAFA.php">Add a new slider</a></span></p>
           <p><a href="sliders_research.php?Group=All"><img src="http://www.kidswithfoodallergies.org/themes/kfa-new-theme/img/kfa-new.png"></a><br>
<span style="text-align:center"><br><a href="sliders_research.php?Group=All">Research SLIDERS</a></span></p>
           </div>
          	
           </div>
    			</div>
    			</div>
           <?php
     include ('/../main_files/template/footer.php');      
           ?>
           
    
  
