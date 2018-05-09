<?php
session_start();
 
 $username = $_POST['username'];
 $password = $_POST['password'];
 $redirect = '/AppStudio/main_files/index.php';

 require('globals.php');
 $conn = db_connect();
       
              
        $sql3 = "SELECT * FROM [app_studio].[dbo].[users] WHERE password = '$password'";
        $result = sqlsrv_query($conn, $sql3);
        if( $result === false){
     die( print_r( sqlsrv_errors(), true));
            echo "No User found";
            header('Location: /AppStudio/login.html');
        }
        else
        {
         while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) )
            {
                
                echo $row['password'];
                $_SESSION['user'] = $row['username'];
                header ("Refresh: 5; URL=" . $redirect  . "");             
          	    echo "(If your browser doesn't support this, " .         
          	    "<a href='/AppStudio/main_files/index.php'>click here</a>)"; 
                exit;
            }
        }
 
  /*      
        if ($numrows == 1)
        {
            while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) )
            {
                
                $_SESSION['user'] = $row['username'];
           
            }
            
            
            
        }
        else
        {
            ;
            
        }
 */
?>