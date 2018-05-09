
<?php
   
   $slider = get_aafa_sliders($slider_group);
    $counter = sqlsrv_num_rows ($slider);
    echo '<div class="col-lg-4 col-md-4 col-sm-4">';
    while ($row = sqlsrv_fetch_array( $slider, SQLSRV_FETCH_ASSOC) )
    {
      
      echo '<div style="border:1px solid black; height:210px; padding:3px;">';
      echo '<img src="';
      echo $row['fileLocation'];
      echo $row ['slidername'];
      echo '"width="60%" class="img-responsive" alt="';
      echo $row ['slidername'];
      echo '">';
      echo '<br/><strong>Location:</strong>&nbsp;';
      echo $row['sliderLocation'];
      echo'<br/>';
	  echo '<strong>Live:</strong>&nbsp;';
      echo $row['live'];
      echo '<br/>';
      echo '<a href="';
	  echo $row['fileLocation'];
      echo $row ['slidername'];
      echo '" target="_blank">View Large</a>';
      echo '<br/>';
      echo 	'<a href="update_slider_form.php?name=';
      echo $row ['slidername'];
      echo '&website=AAFA&location=';
      echo $row['sliderLocation'];
      echo '">Update</a><br/> </div>';
      $counter = $counter -1;
      if ($counter == 0)
      {
	  	echo '</div>';
	  }
      else 
      {
	  	echo '</div><div class="col-lg-4 col-md-4 col-sm-4">';
	  }
		
	}
	?>
