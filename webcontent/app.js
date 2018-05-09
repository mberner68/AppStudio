<script>
var fetch = angular.module('sliderApp', []);

fetch.controller('sliderCtrl', function ($scope, $http) {
 $http.get ("/get_sliders.php").then(function (response) {$scope.slider = response.data;});
 });


</script>

<script>
var fetch = angular.module('sliderApp', []);

fetch.controller('sliderCtrl', function ($scope) {
 $scope.sliders = [
   {
   	sliderName : 'stop-food-allergy-bullying-WS.png',
   	sliderLocation: 'http://www.kidswithfoodallergies.org/media/'
   },
   {
   	sliderName = 'SLIDER-epinephrine-affordable-tips.png',
   	sliderLocation: 'http://www.kidswithfoodallergies.org/media/'
   }
 
 
 ];
 });


</script>