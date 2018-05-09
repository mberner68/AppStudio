<?php
echo '<div style="border:1px solid black; height:250px; padding:3px;">';
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
      echo '<a href="slider_information.php?website=ResearchKFA&slidername=';
      echo $row ['slidername'].'&location='.$row['sliderLocation'];
      echo '">View Info</a>';
      echo '<br/>';
      echo 	'<a href="update_slider_form.php?name=';
      echo $row ['slidername'];
      echo '&website=ResearchKFA&location=';
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
?>