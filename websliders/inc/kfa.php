<form class="form-horizontal" action="add_slider.php" method="post" enctype="multipart/form-data">
<div class="form-group" style="padding:6px;">
<label for= "Slidername" class="control-label">Slider Name</label>
<input type="text" name="slider-name" id="slider-name" value=""/>
</div>
<div class="form-group" style="padding:6px;">
<label for= "FileLocation" class="control-label">File Location</label>
<input type="text" name="file-location" id="file-location" value=""/>
</div>
<div class="form-group" style="padding:6px">
<label for= "website" class="control-label">Website</label>
<input type="text" name="website" id="website" value="KFA"/>
</div>
<div class="form-group" style="padding:6px;">
<label for= "sliderLocation" class="control-label">Slider Location</label>
<select name="slider-location" id="aafa">
<?php
$slider_group = "All";
$website ='KFA';
while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
{
	echo  "    <option value=\"" .$row['sliderLocation']. "\">" . $row['sliderLocation'] .
	"</option>\n";
}
?>
						</select>
				    </div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Live" class="control-label">Live</label>
					<input type="text" name="live" id="live" value=""/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Live Date" class="control-label">Live Date</label>
					<input type="text" name="liveDate" id="liveDate" value=""/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Remove Date" class="control-label">Remove Date</label>
					<input type="text" name="removeDate" id="removeDate" value=""/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Remove Date" class="control-label">Last Used Date</label>
					<input type="text" name="lastused" id="lastused" value=""/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Slide Url" class="control-label">Slide Url</label>
					<input type="text" name="slideurl" id="slideurl" value=""/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Slide Url" class="control-label">Position</label>
					<input type="text" name="position" id="position" value="0"/>
					</div>
					<div class="form-group" style="padding:6px;">
					<input type="hidden" name="id" id="id" value="0"/>
					</div>
					<div class="form-group" style="padding:6px;">
    				<label for= "Notes" class="control-label">Notes</label>
    				<textarea cols="20" rows="10" name="notes">
						
					</textarea>
    				</div>
    				<div class="form-group">
    					<div class="col-sm-offset-2 col-sm-4">
      						<button type="submit" name="action" value="add" class="btn btn-default">Add Slider</button>
							
    					</div>
  </div>
    			</form>
