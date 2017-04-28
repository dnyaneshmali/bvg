var loginapp = angular.module('bvgLogin', ['ngRoute','ngStorage']);

loginapp.controller('loginCtrl',['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage, $location) {
// $scope.data = {};
    $scope.login=function(loginadmin){
        $scope.data = angular.copy(loginadmin);
        //console.log($scope.data);
     $http({
          method  : 'POST',
          url     : 'LoginAction.php',
          data    : $scope.data, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     
     .success(function(data) {

              console.log(data);
              ssid = data[0].admin_id;
              sname = data[0].admin_username;
              srole = data[0].admin_role;
              $scope.$storage = $localStorage;
                if(!ssid == ''){
                $window.localStorage.setItem('ssid',ssid);
                $window.localStorage.setItem('sname',sname);
                $window.localStorage.setItem('srole',srole);
                $window.localStorage.setItem('islogin','true');
                //$scope.data2 = $window.localStorage.getItem('ssid');
                //alert($scope.data2);
                window.location.replace("views/admin/admin.php");
              }else{
                window.location.replace("http://localhost/bvg/login.php");
              }
              //$window.location.href="views/admin/admin.php";
              
            

          });

}

}]);


app.controller('Adminbarctrl',['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage, $location) {
                 
                  $scope.ssid = $window.localStorage.getItem('ssid');
                  $scope.sname = $window.localStorage.getItem('sname');
                  $scope.srole = $window.localStorage.getItem('srole');
                  $scope.islogin = $window.localStorage.getItem('islogin');

    $scope.logout=function(){

                 $window.localStorage.setItem('ssid','');
                 $window.localStorage.setItem('sname','');
                 $window.localStorage.setItem('srole','');
                 $window.localStorage.setItem('islogin','false');
                 if($window.localStorage.getItem('ssid') == ''){
                  window.location.replace("http://localhost/bvg/login.php");
                 }
            }

}]);