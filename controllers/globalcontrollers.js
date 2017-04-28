/**
 * Created by User on 24/04/17.
 */
 app.controller('Dashboard', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
    if($window.localStorage.getItem('ssid') == ''){
    window.location.replace("http://localhost/bvg/");
  }

/*
  $scope.isaquaadmin = function(){
$scope.srole = $window.localStorage.getItem('srole');

    if ($scope.srole == "gasadmin"){
 return false;
  };
   if ($scope.srole == "superadmin" ||  $scope.srole == "aquaadmin"){
return true;
   };
  }

   $scope.isgasadmin = function(){
$scope.srole = $window.localStorage.getItem('srole');

    if ($scope.srole == "aquaadmin") {
 return false;
  };
   if ($scope.srole == "superadmin" || $scope.srole == "gasadmin" ) {
return true;
   };
 
  }
  */

  $scope.isadmin = function(){
$scope.srole = $window.localStorage.getItem('srole');

     if ($scope.srole == "superadmin") {
return true;
  };
   if ($scope.srole == "supervisor") {
return false;
   };

   if ($scope.srole == "manager") {
return false;
   };

  }  

}]);

app.controller('Aqua', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
    if($window.localStorage.getItem('ssid') == ''){
    window.location.replace("http://localhost/bvg/");
  }
}]);

app.controller('Addmanagerctrl', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
  //$scope.obj={'idisable':false};
          if($window.localStorage.getItem('ssid') == ''){
              window.location.replace("http://localhost/bvg/");
            }
             $scope.reset = function() {
  delete $scope.admin;
  $scope.addadminform.$setPristine();

}

           $scope.insertdata=function(admin){
              $scope.admin = {};
           $scope.admin = angular.copy(admin);
           console.log($scope.admin);
              $http({
                     method  : 'POST',
                     url     : '../../models/insertadmin.php',
                     data    : $scope.admin, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      /* console.log(data);*/
                         $scope.msg = "data inserted successfully ";

                        delete $scope.admin;
                         swal({
  title: "Successfully!",
  text: "admin added successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                        $scope.addadminform.$setPristine();
           
                     });
           
           }
 }]);


app.controller('Managerlistctrl', ['$scope','$http', '$window', '$localStorage', '$filter', function($scope, $http, $window, $localStorage, $filter) {

    $scope.iseditid='';
    $scope.oldadmin='';

              if($window.localStorage.getItem('ssid') == ''){
                window.location.replace("http://localhost/bvg/");
              }
                $http.get("../../models/getadmin.php")
                .success(function(data){
                    $scope.data=data
                    //console.log($scope.data);
                });


              $scope.deleteuser=function(supervisor_id,index){
                alert('in delete function');
                swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },
    function(){

            console.log(supervisor_id);
                 $http({
                      method  : 'POST',
                      url     : '../../models/deletesupervisor.php',
                      data    : {'supervisor_id':supervisor_id}, //forms user object
                      headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                     })
                 .success(function(data) {
                        
                        console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            })
              }
               
            /*
            */
              $scope.logout=function(){

                 $window.localStorage.setItem('ssid','');
                 $window.localStorage.setItem('sname','');
                 $window.localStorage.setItem('srole','');
                 $window.localStorage.setItem('islogin','false');
            }
           //button work functions and update operation
            $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldadmin){
              if($scope.oldadmin){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "admin_id");
                $scope.data[index1]=angular.copy($scope.oldadmin);
                delete $scope.oldadmin;
              }
              $scope.iseditid=id;
              $scope.oldadmin=angular.copy(oldadmin);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              console.log($scope.oldadmin);
              $scope.data[id]=angular.copy($scope.oldadmin);
              delete $scope.oldadmin;
              $scope.$watch();
            }
            $scope.initval = function (admin) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateuser=function(admin,index){
              $http({
                     method  : 'POST',
                     url     : '../../models/updateadmin.php',
                     data    : admin, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      /* console.log(data);*/
                        $scope.msg = "data inserted successfully ";
                        $scope.addadminform.$setPristine();
                        delete $scope.oldadmin;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }


           function getIndexOf(arr, val, prop) {
              var l = arr.length,
                k = 0;
              for (k = 0; k < l; k = k + 1) {
                if (arr[k][prop] === val) {
                  return k;
                }
              }
              return false;
            }

}]);



app.controller('Listsupervisorctrl', ['$scope','$http', '$window', '$localStorage', '$filter', function($scope, $http, $window, $localStorage, $filter) {

              if($window.localStorage.getItem('ssid') == ''){
                window.location.replace("http://localhost/bvg/");
              }
                $http.get("../../models/getsupervisor.php")
                .success(function(data){
                    $scope.data=data
                    console.log($scope.data);
                });


              $scope.deleteuser=function(supervisor_id,index){
                alert('in delete function');
                swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },
    function(){

            console.log(supervisor_id);
                 $http({
                      method  : 'POST',
                      url     : '../../models/deletesupervisor.php',
                      data    : {'supervisor_id':supervisor_id}, //forms user object
                      headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                     })
                 .success(function(data) {
                        
                        console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            })
              }

              $scope.logout=function(){

                 $window.localStorage.setItem('ssid','');
                 $window.localStorage.setItem('sname','');
                 $window.localStorage.setItem('srole','');
                 $window.localStorage.setItem('islogin','false');
            }
           //button work functions and update operation
            $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldadmin){
              if($scope.oldadmin){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "admin_id");
                $scope.data[index1]=angular.copy($scope.oldadmin);
                delete $scope.oldadmin;
              }
              $scope.iseditid=id;
              $scope.oldadmin=angular.copy(oldadmin);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              console.log($scope.oldadmin);
              $scope.data[id]=angular.copy($scope.oldadmin);
              delete $scope.oldadmin;
              $scope.$watch();
            }
            $scope.initval = function (supervisor) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateuser=function(supervisor,index){
              $http({
                     method  : 'POST',
                     url     : '../../models/updatesupervisor.php',
                     data    : supervisor, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      /* console.log(data);*/
                        $scope.msg = "data inserted successfully ";
                        $scope.addmanagerform.$setPristine();
                        delete $scope.oldadmin;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }


           function getIndexOf(arr, val, prop) {
              var l = arr.length,
                k = 0;
              for (k = 0; k < l; k = k + 1) {
                if (arr[k][prop] === val) {
                  return k;
                }
              }
              return false;
            }

}]);



app.controller('Addsitectrl', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
  
          if($window.localStorage.getItem('ssid') == ''){
              window.location.replace("http://localhost/bvg/");

            }
             $scope.reset = function() {
                delete $scope.sites;
                $scope.addsiteform.$setPristine();
              }

           $scope.insertdata=function(sites){
              $scope.sites = {};
           $scope.sites = angular.copy(sites);
           console.log($scope.sites);
              $http({
                     method  : 'POST',
                     url     : '../../models/insertsite.php',
                     data    : $scope.sites, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      /* console.log(data);*/
                         $scope.msg = "data inserted successfully ";

                        delete $scope.sites;
                         swal({
                                title: "Successfully!",
                                text: "Site added successfully!",
                                type: "success",
                                confirmButtonText: "Ok"
                              });
                        $scope.addsiteform.$setPristine();
           
                     });
           
           }
 }]);


 
app.controller('Sitelistctrl', ['$scope','$http', '$window', '$localStorage', '$filter', function($scope, $http, $window, $localStorage, $filter) {

              if($window.localStorage.getItem('ssid') == ''){
                window.location.replace("http://localhost/bvg/");
              }
                $http.get("../../models/getsites.php")
                .success(function(data){
                    $scope.data=data
                    console.log($scope.data);
                });



                 $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldadmin){
              if($scope.oldadmin){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "admin_id");
                $scope.data[index1]=angular.copy($scope.oldadmin);
                delete $scope.oldadmin;
              }
              $scope.iseditid=id;
              $scope.oldadmin=angular.copy(oldadmin);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              console.log($scope.oldadmin);
              $scope.data[id]=angular.copy($scope.oldadmin);
              delete $scope.oldadmin;
              $scope.$watch();
            }
            $scope.initval = function (sites) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateuser=function(sites,index){
              $http({
                     method  : 'POST',
                     url     : '../../models/updatesites.php',
                     data    : sites, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      /* console.log(data);*/
                        $scope.msg = "data inserted successfully ";
                        $scope.addsiteform.$setPristine();
                        delete $scope.oldadmin;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }




              $scope.deletesite=function(site_id,index){
                alert('in delete function');
                swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },
    function(){

            console.log(site_id);
                 $http({
                      method  : 'POST',
                      url     : '../../models/deletesite.php',
                      data    : {'site_id':site_id}, //forms user object
                      headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                     })
                 .success(function(data) {
                        
                        console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            })
              }





 }]);



app.controller('Allocatesitectrl', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
  
          if($window.localStorage.getItem('ssid') == ''){
              window.location.replace("http://localhost/bvg/");

            }
             $scope.reset = function(){
                delete $scope.sites;
                $scope.allocatesiteform.$setPristine();
              }

              $http.get("../../models/getsites.php")
                .success(function(data){
                    $scope.sitedata=data
                    console.log($scope.sitedata);
                });


                     $scope.changedname=function(site){
                      //alert(site);
      $scope.site = {};
    $scope.site = angular.copy(site);
    //console.log($scope.site);
   $http({
          method  : 'POST',
          url     : '../../models/getsitedetails.php',
          data    : {'site': site}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            //console.log(data);
             $scope.sitedetails=data
            console.log($scope.sitedetails);
            $scope.site_id = data[0].site_id;
            $scope.site_type = data[0].site_type;
            $scope.site_city = data[0].site_city;
            $scope.site_area = data[0].site_area;
            $scope.site_road = data[0].site_road;
            $scope.site_pin = data[0].site_pin;
            $scope.allocatehift_name = data[0].site_shift_name;
            $scope.allocatehift_time = data[0].site_shift_time;
            

          });

}



           $scope.insertdata=function(sites){
              $scope.sites = {};
           $scope.sites = angular.copy(sites);
           console.log($scope.sites);
              $http({
                     method  : 'POST',
                     url     : '../../models/insertsite.php',
                     data    : $scope.sites, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data){
                      /* console.log(data);*/
                         $scope.msg = "data inserted successfully";

                        delete $scope.sites;
                         swal({
                                title: "Successfully!",
                                text: "Site added successfully!",
                                type: "success",
                                confirmButtonText: "Ok"
                              });
                        $scope.allocatesiteform.$setPristine();
           
                     });
           
           }
 }]);
