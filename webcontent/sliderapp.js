<script>
var fetch = angular.module('sliderapp', []);

fetch.controller('sliderCtrl', ['$scope', '$http', function ($scope, $http) {
 $http({
  method: 'get',
  url: 'get_sliders.php'
 }).then(function successCallback(response) {
  // Store response data
  $scope.slider = response.data;
 });
}]);

</script>