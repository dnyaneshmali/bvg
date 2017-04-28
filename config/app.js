
var app = angular.module('app',['ngRoute','ngStorage','validation.match','autocomplete','datePicker']);

app.config(function($routeProvider) {
    $routeProvider
    .when('/', {
            templateUrl : 'dashboard.php',
            controller  : 'Dashboard'
        })

        .when('/myaccount', {
            templateUrl : 'myaccount.php',
            controller  : 'Addmyaccountctrl'
        })

      .when('/aquadashboard', {
            templateUrl : 'aqua/aquadashboard.php',
            controller  : 'Aquadashboardctrl'
        })
     .when('/addaquacustomer', {
            templateUrl : 'aqua/addaquacustomer.php',
            controller  : 'Addaquactrl'
        })
     .when('/listaquacustomer', {
            templateUrl : 'aqua/listaquacustomer.php',
            controller  : 'Listaquactrl'
        })
     .when('/addaquaproducts', {
            templateUrl : 'aqua/addaquaproducts.php',
            controller  : 'Addaquaproductctrl'
        })
     .when('/listaquaproduct', {
            templateUrl : 'aqua/listaquaproduct.php',
            controller  : 'Listaquaproductctrl'
        })
      .when('/addaquaorder', {
            templateUrl : 'aqua/addaquaorder.php',
            controller  : 'Addaquaorderctrl'
        })
      .when('/listaquaorder', {
            templateUrl : 'aqua/listaquaorder.php',
            controller  : 'Listaquaorder'
        })

     .when('/managerlist', {
            templateUrl : 'adminlist.php',
            controller  : 'Managerlistctrl'
        })
      .when('/addmanager', {
            templateUrl : 'Addadmin.php',
            controller  : 'Addmanagerctrl'
        })


      .when('/sitelist', {
            templateUrl : 'sitelist.php',
            controller  : 'Sitelistctrl'
        })
      .when('/addsite', {
            templateUrl : 'addsite.php',
            controller  : 'Addsitectrl'
        })

.when('/allocatesite', {
            templateUrl : 'allocatesite.php',
            controller  : 'Allocatesitectrl'
        })


       .when('/supervisorlist', {
            templateUrl : 'listsupervisor.php',
            controller  : 'Listsupervisorctrl'
        })

});
