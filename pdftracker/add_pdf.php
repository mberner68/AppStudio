<?php
    $title = "Add PDF to Database";
    include ('/../main_files/template/header.php');
	?>
 
 <body>

    <div id="wrapper">

      <?php include('/../main_files/template/nav.php');
   ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add A PDF to Database</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
       
              	
    	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6" style="border:3px solid #0000cc; margin:0 auto; border-radius: 10px;">
			<h3>PDF Form</h3>
    			<form class="form-horizontal" action="insertpdf.php" method="post" enctype="multipart/form-data">
						<div class="form-group" style="padding:6px;">
						<label for= "Slidername" class="control-label">PDF Name</label>
						<input type="text" name="name" id="name" value=""/>
						</div>
						<div class="form-group" style="padding:6px;">
						<label for= "FileLocation" class="control-label">File Location</label>
						<input type="text" name="filelocation" id="filelocation" value=""/>
						</div>
						<div class="form-group" style="padding:6px">
						<label for= "website" class="control-label">File Name</label>
						<input type="text" name="filename" id="filename" value=""/>
						</div>
						<div class="form-group" style="padding:6px;">
						<label for= "website" class="control-label">website</label>
						<select name="website" id="website">
                               <option value="AAFA">AAFA</option>
                               <option value="AAFA/Store">AAFA/Store</option>
                               <option value="KFA">KFA</option>
                               <option value="KFA/Store">KFA/Store</option>
                               <option value="Store">Store</option>
                               <option value="Misc">Miscellaneous</option>
                        </select>
				    	</div>

						<div class="form-group" style="padding:6px;">
    					<label for= "Page Location" class="control-label">Page Location</label>
						<textarea cols="20" rows="10" name="pagelocation">
						
					    </textarea>
						</div>
						<div class="form-group" style="padding:6px;">
	    				<label for= "Store Location" class="control-label">Store Location</label>
						<input type="text" name="storeloc" id="storeloc" value=""/>
						</div>
						<div class="form-group" style="padding:6px;">
	    				<label for= "Date" class="control-label">Date</label>
						<input type="text" name="date" id="date" value=""/>
						</div>
	    				<div class="form-group">
	    					<div class="col-sm-offset-2 col-sm-4">
	      						<button type="submit" name="action" value="insert" class="btn btn-default">Insert Pdf</button>
								
	    					</div>
  </div>
    			</form>
    			
    			
    			
    			
    			</div>
    		<div class="col-lg-6 col-md-6 col-sm-6">&nbsp;</div>
    	 
    		</div>
    	</div></div>

    
    <!-- /#wrapper -->

   <?php
     include ('/../main_files/template/footer.php');      
           ?>
