                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      /**
 * Created by User on 10/19/14.
 */

app.controller('Aquadashboardctrl', ['$scope','$http', function($scope, $http) {
// $scope.container = {width:500, height:300, gap:10};


 $http.get("../../models/getorderreport.php")
    .success(function(data){
        $scope.reminderdata=data
        console.log($scope.reminderdata);
        //console.log($scope.reminderdata[0].order_total);

        var chartData=[];
        for(var i=0, l=$scope.reminderdata.length; i<l; i++ ){

          chartData.push({c: [{v: $scope.reminderdata[i].order_month }, {v: $scope.reminderdata[i].order_total}, {v: "orange"}]});
          //console.log(chartData);
           console.log("work" );
        }


$scope.chartObject = {
type: 'ColumnChart',
data: {
"cols": [
{label: "frameworks", type: "string"},
{label: "Orders", type: "number"},
{role: "style", type: "string"}
],
"rows":  chartData
}

};

$scope.chartObject.options = {
        'title': 'Annadmurti Aqua Monthly Orders',
        'color': 'orange'
        

    };
    });

}]);


app.controller('Addaquactrl', ['$scope','$http', function($scope,$http) {
  $scope.reset = function() {
  delete $scope.aquacustomers;
  $scope.addaaquaform.$setPristine();
}


$scope.insertdata=function(aquacustomers){

  $scope.aquacustomers = {};

$scope.aquacustomers = angular.copy(aquacustomers);
console.log($scope.aquacustomers);
	 $http({
          method  : 'POST',
          url     : '../../models/insertaquacustomer.php',
          data    : $scope.aquacustomers, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              //$scope.msg = "data inserted successfully "
                        delete $scope.aquacustomers;
                        swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                      $scope.addaaquaform.$setPristine();
            

          });

}
}]);


app.controller('Listaquactrl', ['$scope','$http', function($scope,$http) {
  $scope.iseditid='';
    $scope.oldaqua='';
    
    $http.get("../../models/getaquacustomer.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });


  $scope.deleteuser=function(acustomer_id,index){
    delete $scope.unsetedit();

    //alert('in delete function');


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

console.log(acustomer_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteaqua.php',
          data    : {'acustomer_id':acustomer_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
                     console.log(data);
                     $scope.data.splice(index, 1);
                        $scope.$watch();
            
 });
            });
  }

             $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldaqua){
              if($scope.oldaqua){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "acustomer_id");
                $scope.data[index1]=angular.copy($scope.oldaqua);
                delete $scope.oldaqua;
              }
              $scope.iseditid=id;
              $scope.oldaqua=angular.copy(oldaqua);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldaqua);
              $scope.$watch();

            }
            $scope.initval = function (aquacustomer) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateaquacustomer=function(aquacustomer,index){
              console.log(aquacustomer);
              $http({
                     method  : 'POST',
                     url     : '../../models/updatelistaquacutomers.php',
                     data    : aquacustomer, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                        $scope.msg = "data inserted successfully ";
                        $scope.listaquacustomerform.$setPristine();
                        delete $scope.oldaqua;
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

