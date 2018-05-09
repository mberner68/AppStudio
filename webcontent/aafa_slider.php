<?php
require ('inc/globals.php');

?>

<!DOCTYPE html>
<html>
 <head>
<title>AAFA Sliders</title>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
  
  
 </head>
 <body><?php
 $conn = db_connect();
 $sql = "SELECT DISTINCT sliderLocation FROM [app_studio].[dbo].[aafasliders]";
$result = sqlsrv_query($conn, $sql3);
        if( $result === false){
     die( print_r( sqlsrv_errors(), true));
     }
     while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) )
     {
	 	echo '<ul style="list-style-type:none><li>';
	 	echo '<a href="get_aafa_sliders.php?loc="' .$row['sliderLocation'];
	 	echo '"'. $row['sliderLocation'] . '</a></li>';
	 	
	 }
 <div ng-app="sliderApp" ng-controller="sliderCtrl">
 <h3>{{x.sliderLocation}</h3>
  <table>
  
  <!-- Display records -->
  <tr ng-repeat="x in sliders">
  <td>{{x.slider}}</td>
  <td><img src="{{x.location}}/{{x.slider}}" width="150" alt="{{x.slider}}"</td>
<td>URL: {{x.Url}}</td><td>Live: {{x.live}}</td>
 </tr>
 
  </table>
  </div>
 <script>
var app = angular.module('sliderApp', []);

 app.controller('sliderCtrl', function ($scope, $http) {
 $http.get ("get_sliders.php?loc=<?php echo $loc ?>").then(function (response) {$scope.sliders = response.data;});
});


</script>
 </body>
 
</html>