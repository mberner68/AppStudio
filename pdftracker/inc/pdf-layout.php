
<?php
      echo '<tr><td><strong>PDF Name:</strong></td><td>';
      echo $row['pdfname'];
      echo '</td><td>';
      echo '<a href="pdf_information.php?pdfname=';
      echo $row['pdfname'];
      echo '">View Info</a></td></tr>';
      
?>