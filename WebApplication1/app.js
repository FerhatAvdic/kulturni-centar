(function () {

    var kcApp = angular.module('kcApp', ['ngRoute']);

    kcApp.config(function ($routeProvider, $locationProvider) {
        $routeProvider
        .when('/home', { templateUrl: '/views/home.html', controller: 'homeController' })
        .when('/shows', { templateUrl: '/views/shows.html', controller: 'showsController' })
        .when('/showItem', { templateUrl: '/views/showItem.html', controller: 'showItemController' })
        .when('/reservations', { templateUrl: '/views/reservations.html', controller: 'reservationsController' })
        .when('/contact', { templateUrl: '/views/contact.html', controller: 'contactController' })
        .when('/adminLogin', { templateUrl: '/views/adminLogin.html', controller: 'adminLoginController' })
        .when('/adminBoard', { templateUrl: '/views/adminBoard.html', controller: 'adminBoardController' })
        .otherwise({ redirectTo: "/home" });
    });

}());
